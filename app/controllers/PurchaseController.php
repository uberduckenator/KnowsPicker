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
		$userProfile = $this->model('UserProfile');
		$profile = $userProfile->getUser($SESSION['login_id']);
		$user_id = $profile->user_id;
		$paymentInfo = $this->model('Payment')->get($user_id); 

		//We handle the purchase stuff like before
		$purchase = $this->model('Purchase');
		$shippingCost = $this->model('Shi')$purchase->shipping_id;
		$cartID = $purchase->getCartID($SESSION['login_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($cartID);

		$this->view('Purchase/index',['Profile'=>$profile, 'Payment'=>$paymentInfo, 'Cart'=>$inCart]);
	}

	public function something()
	{
		
	}
}