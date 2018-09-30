<?php

namespace App\Models;

use Cocur\Slugify\Slugify;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait SaveImage
{
	public function storeImageOnCreating ()
	{
		if ( ! empty( $this->image ) ) {
			$slug  = new Slugify();
			$normalizeModelName = $slug->slugify(class_basename(get_class($this)));

			try {
				$imageArr  = explode( '.', $this->image );
				$extension = end( $imageArr );
				$imagePath = $normalizeModelName . '/' . $this->alias . '-' . time() . '.' . $extension;
				Storage::move( $this->image, 'public/' . $imagePath );
				$this->image = $imagePath;
			} catch ( \Exception $e ) {
				Log::error( $e->getMessage() );
			}
		}
	}

	public function storeImageOnUpdating ()
	{
		// move image to game folder, doan nay t check ca anh co nam trong thu muc tmp ko
        if ( ! empty( $this->image )) {
            $slug  = new Slugify();
            $normalizeModelName = $slug->slugify(class_basename(get_class($this)));
// con ko chay vao day =)) sao nos hien 2 hidden la sao vay?
            try {
                $imageArr  = explode( '.', $this->image );
                $extension = end( $imageArr );
                $oldImagePath = $this->getOriginal('image');
                $imagePath = $normalizeModelName . '/' . $this->alias . '-' . time() . '.' . $extension;
                // delete old image if it existed
                //dd($oldImagePath);
                //dd(Storage::disk('local')->exists('public/' . $oldImagePath));
                if(Storage::disk('local')->exists($oldImagePath)) {
                    Storage::delete($oldImagePath);
                }
                Storage::move( $this->image, 'public/' . $imagePath );
                $this->image = $imagePath;
            } catch ( \Exception $e ) {
                Log::error( $e->getMessage() );
            }
        }
    }
}