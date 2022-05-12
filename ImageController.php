<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Handle image upload
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:gif,jpeg,bmp,jpg,png',
        ]);
        
        $file = $request->file('file');
        $directory = 'uploadimages';
        if (!\Storage::disk('public')->exists($directory)) {
            \Storage::disk('public')->makeDirectory($directory);
        }

        $path = \Storage::disk('public')->putFile($directory, $file);
        return response()->json(['link' => asset(\Storage::url($path))]);
    }
}
