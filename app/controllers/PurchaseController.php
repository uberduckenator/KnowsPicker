<?php

class PurchaseController extends Controller
{
	public function index()
	{
		$purchase = $this->model('Purchase');
		$cartID = $purchase->getCartID($SESSION['login_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($cartID);
		$this->view('Purchase/index', $inCart);
	}

	public function checkout()
	{
		//Also need the person information
		//Need to add this...
		$profile = $this->model('Profile');
		

		//We handle the purchase stuff like before
		$purchase = $this->model('Purchase');
		$cartID = $purchase->getCartID($SESSION['login_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($cartID);
		$this->view('Purchase/index', $inCart);
	}
}