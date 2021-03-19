<?php 

namespace App\Services;

use Str;

class UploadService
{
	public function imageUpload($path)
	{
		$file = request()->file('file');
		$filename = Str::random(9).$file->getClientOriginalName();
		$file->move(public_path('uploads/img/'.$path),$filename);

		return $filename;
	}
}