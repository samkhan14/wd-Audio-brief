<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class AudioService
{
    public function storeAudio($audioFile)
    {
        $extension = $audioFile->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $audioPath = storage_path('app/temp_audio/' . $filename);

        if (!file_exists(storage_path('app/temp_audio'))) {
            mkdir(storage_path('app/temp_audio'), 0755, true);
        }

        $audioFile->move(storage_path('app/temp_audio'), $filename);
        return $audioPath;
    }

    public function deleteAudio($audioPath)
    {
        if (file_exists($audioPath)) {
            unlink($audioPath);
        }
    }
}
