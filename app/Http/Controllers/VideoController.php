<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function showPreviewVideo()
    {
        $filename = 'preview.mp4';
        $path = storage_path('app/private/' . $filename);

        if (!Storage::exists('private/' . $filename)) {
            abort(404);
        }

        $file = Storage::get('private/' . $filename);
        $type = Storage::mimeType('private/' . $filename);

        $response = response($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);

        return $response;
    }
}
