<?php

namespace App\Models;

use App\Models\Insertions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function insertion()
    {
        return $this->belongsTo(Insertions::class);
    }

    public static function getUrlByFilePath($filePath, $w =null, $h = null){
        if(!$w &&!$h){
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $filename = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$filename}";

        return Storage::url($file);
    }

    public function getUtl ($w =null, $h = null){
        return Image::getUrlByFilePath($this->path, $w, $h);
    }
}
