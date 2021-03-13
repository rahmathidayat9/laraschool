<?php 

namespace App\Services;

use Str;

class UploadService
{
	public function imageUpload($path)
	{
		$file = request()->file('file');
		$filename = $file->getClientOriginalName();
		$file->move(public_path('uploads/img/'.$path),$filename);

		return $filename;
	}
}