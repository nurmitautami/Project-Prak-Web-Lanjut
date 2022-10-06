<?php namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\Entity\Entity as EntityEntity;

class User extends EntityEntity
{
	public function setPassword(string $pass)
	{
		$salt = uniqid('', true);
		$this->attributes['salt'] = $salt;
		$this->attributes['password'] = md5($salt.$pass);

		return $this;
	}
}