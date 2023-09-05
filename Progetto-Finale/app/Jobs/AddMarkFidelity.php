<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class addMarkFidelity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $insertion_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($insertion_image_id)
    {
        $this->insertion_image_id = $insertion_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->insertion_image_id);
        if(!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
        
        $imageAnnotator = new ImageAnnotatorClient();

        $image = SpatieImage::load($srcPath);

        $image->watermark(base_path('public/images/logo_presto-it.png'))
            ->watermarkPosition('top-left')
            ->watermarkPadding(400, 200)
            ->watermarkWidth(100, Manipulations::UNIT_PIXELS)
            ->watermarkHeight(100, Manipulations::UNIT_PIXELS)
            ->watermarkFit(Manipulations::FIT_STRETCH);

        $image->save($srcPath);
    

        $imageAnnotator->close();
    }

}

