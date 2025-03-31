<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $vcardImageString = null;

        if ($this->profile_theme_type == 'balloon'){
            $imagePath = base_path('/storage/app/' . $this->profile_img_cover_balloon);
        }else{
            $imagePath = base_path('/storage/app/' . $this->profile_img_cover_hero);
        }

        if (is_file($imagePath)) {

            if (file_exists($imagePath)) {

                $imageData = file_get_contents($imagePath);

                $base64Image = base64_encode($imageData);

                $vcardImageString = $base64Image;
            }
        } else {
            Log::warning("Il percorso specificato non è un file: $imagePath");
        }

        return [
            'id' => $this->id,
        ];
    }
}
