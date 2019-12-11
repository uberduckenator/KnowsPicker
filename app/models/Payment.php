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
		$stmt->execute(['cardnumber'=>$this->cardnumber, 'cardholder'=>$this->cardholder, 'cvv2'=>$this->cvv2, 'expiration_date'=>$this->expiration_date, 'user_id'=>$this->user_id]);
	}

	public function edit()
	{
		$stmt = self::$_connection->prepare("UPDATE payment SET cardnumber = :cardnumber, cardholder = :cardholder, cvv2 = :cvv2, expiration_date = :expiration_date, user_id = :user_id");
		$stmt->execute(['cardnumber'=>$this->cardnumber, 'cardholder'=>$this->cardholder, 'cvv2'=>$this->cvv2, 'expiration_date'=>$this->expiration_date, 'user_id'=>$this->user_id]);
	}

	public function delete($payment_id)
	{
		$stmt = self::$_connection->prepare("DELETE FROM payment WHERE payment_id = :payment_id");
        $stmt->execute(['payment_id'=>$payment_id]);
	}

	public function get($user_id)
	{
		$stmt = self::$_connection->prepare("SELECT * FROM payment WHERE user_id = :user_id");
        $stmt->execute(['user_id'=>$user_id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Payment');
        return $stmt->fetch();
	}

	public function update()
	{
		$stmt = self::$_connection->prepare("UPDATE payment SET cardnumber = :cardnumber, cardholder = :cardholder, cvv2 = :cvv2, expiration_date = :expiration_date WHERE payment_id = :payment_id");
        $stmt->execute(['payment_id'=>$payment_id]);
	}

}