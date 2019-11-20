<?php

class Payment extends Model
{
	public $payment_id; //Mayber for admin

	//Use these
	public $cardnumber;
	public $cardholder;
	public $cvv2;
	public $expiration_date;
	public $user_id;

	public function insert()
	{
		$stmt = self::$_connection->prepare("INSERT INTO payment (cardnumber, cardholder, cvv2, expiration_date, user_id) VALUES (:cardnumber, :cardholder, :cvv2, :expiration_date, :user_id)");
		$stmt->execute(['cardnumber'=>$this->cardnumber, 'cardholder'=>])
	}
}