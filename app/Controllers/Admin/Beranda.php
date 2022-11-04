<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Admin'
		];
		return view('admin/beranda', $data);
	}
}
