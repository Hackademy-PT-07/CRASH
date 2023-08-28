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
}
