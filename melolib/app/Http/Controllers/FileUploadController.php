<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;

class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {

        $file = $request->file('file');
        $cloudinary = new Cloudinary(
            [
                'cloud' => [
                    'cloud_name' => 'doy8hfzvk',
                    'api_key' => '783828345481378',
                    'api_secret' => '_FiZxF0m1E6_HlMvf8ZEvQ8BQhM',
                ],
            ]
        );
        
        $uploadResult = $cloudinary->UploadApi()->upload($file->getPathname());
        $imageUrl = $uploadResult['secure_url'];
        
        

        return back()
            ->with('success', 'File uploaded successfully');
    }
}
