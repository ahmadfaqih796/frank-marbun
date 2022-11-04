<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'Login'
		];
		return view("admin/login", $data);
	}

	public function cek_login()
	{
		$this->adminModel = new AdminModel();
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		$cek = $this->adminModel->cek_login($username, $password);
		if ($cek) {
			session()->set('id', $cek['id']);
			session()->set('username', $cek['username']);
			session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('Admin/PPDB'));
		} else {
			session()->setFlashdata('gagal', 'username atau password salah');
			return redirect()->to(base_url('Admin/login'));
		}
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('Admin/login'));
	}
}
