<?php namespace App\Controllers;

class login extends BaseController
{
	public function index()
	{
		return view('user_form');
	}

	public function login_action() 
	{
		$muser = new My_user();

		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

		$cek = $muser->get_data($email,$password);	

		if(($cek['email'] == $email) && ($cek['passwd'] == $password))
		{
			session()->set('email', $cek['email']);
			return redirect()->to(base_url('user'));
		} else {
			session()->setFlashdata('gagal' , 'Username / Password salah');
			return redirect()->to(base_url('login'));
		}
	}

}
