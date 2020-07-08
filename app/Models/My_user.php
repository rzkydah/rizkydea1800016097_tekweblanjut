<?php namespace App\Models;
use Codeigniter\Model

<? php namespace App\Models;
use CodeIgniter\Model;
class My_user extends Model;

{
	public function get_data($email,$password)
	{
		return $this->db->table('user')
		->where(array('username' => $email , 'passwd' => $password))
		->get()->getRowArray();
	}

	//--------------------------------------------------------------------

}
