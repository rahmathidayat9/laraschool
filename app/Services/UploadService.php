<?php 

namespace App\Services;

use Str;

class UploadService
{
	public function imageUpload($path)
	{
		$file = request()->file('file');
		$filename = $file->getClientOriginalName();
		$file->move(public_path('uploads/img/'.$path),Str::random(9).$filename);

		return $filename;
	}
}