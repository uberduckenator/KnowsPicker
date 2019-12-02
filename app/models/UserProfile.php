<?php

class UserProfile extends Model
{
	public $user_id;//Maybe for admin

	//Use these
	public $first_name;
	public $last_name;
	public $email;
	public $city;
	public $street_address;
	public $postal_code;
	public $login_id;
	public $country_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO user_profile (first_name, last_name, email, city, street_address, postal_code, login_id, country_id) VALUES (:first_name, :last_name, :email, :city, :street_address, :postal_code, :login_id, :country_id)");
		$stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'email'=>$this->email, 'city'=>$this->city, 'street_address'=>$this->street_address, 'postal_code'=>$this->postal_code, 'login_id'=>$this->login_id, 'country_id'=>$this->country_id]);
	}

	//Edits only the user's info
	public function edit($user_id)
	{
		$stmt = self::$_connection->prepare("UPDATE user_profile SET first_name = :first_name, last_name = :last_name, email=:email, country = :country, city = :city, street_address = :street_address, postal_code = :postal_code WHERE user_id = :user_id");
		$stmt->execute(['first_name'=>$this->first_name, 'last_name'=>$this->last_name, 'email'=>$this->email, 'country'=>$this->country, 'city'=>$this->city, 'street_address'=>$this->street_address, 'postal_code'=>$this->postal_code, 'user_id'=>$user_id]);
	}

	public function delete($user_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM user_profile WHERE user_id = :user_id");
		$stmt->execute(['user_id'=>$user_id]);
	}

	public function get($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM user_profile WHERE user_id = :user_id");
		$stmt->execute(['user_id'=>$user_id]);
	}

	//Gets the user's info based on their login_id (INCLUDES PAYMENT_ID FOR PAYMENT INFO)
	public function getUser($login_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM user_profile WHERE login_id = :login_id");
		$stmt->execute(['login_id'=>$login_id]);
	}
}