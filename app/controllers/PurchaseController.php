<?php

class PurchaseController extends Controller
{
	public function index()
	{
		$purchase = $this->model('Purchase');
		$cartID = $purchase->getCartID($_SESSION['login_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($cartID);
		$this->view('Purchase/index', $inCart);
	}

	public function checkout()
	{
		//Also need the person information
		//Need to add this...
		$userProfile = $this->model('UserProfile');
		$profile = $userProfile->getUser($_SESSION['login_id']);
		$user_id = $profile->user_id;
		$paymentInfo = $this->model('Payment')->get($user_id); 

		//We handle the purchase stuff like before
		$purchase = $this->model('Purchase');
<<<<<<< HEAD
		$shippingCost = $this->model('Shi')$purchase->shipping_id;
=======
		//$shippingCost = $this->model('Shi')$purchase->shipping_id;
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
		$cartID = $purchase->getCartID($_SESSION['login_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($cartID);

		$this->view('Purchase/index',['Profile'=>$profile, 'Payment'=>$paymentInfo, 'Cart'=>$inCart]);
	}

	public function addItem($item_id)
	{
		$purchase = $this->model('Purchase');
		$purchase->getCartID($_SESSION['login_id']);
		//No open cart
		if ($purchase->purchase_id == null)
		{
			$purchase->total = 0;
			$purchase->payment_id = 0;
			$purchase->user_id = $this->model['UserProfile']->getUser($_SESSION['login_id']);
			$purchase->payment_confirm = 0;
			$purchase->insert();
		}
		$purchaseDetails = $this->model('PurchaseDetails');
		$purchaseDetails->item_id = $item_id;
		$purchaseDetails->purchase_id = $purchase->purchase_id;

		$item = $this->model('Items')->get($item_id);
		$item_price = $item->price;
		$purchasePrice = $item_price;

		//$purchaseDetails->purchase_price = 0;
		$purchaseDetails->quantity = 1;
		$purchaseDetails->insert();
		header('location:/Purchase/index');
	}

<<<<<<< HEAD
	public function orders()
	{
		//Displays user's orders in progress and completed
		
=======
	//Purchase history
	//Could list all details in one view
	//Or could list the orders briefly and have a details view
	public function orders()
	{
		$purchase = $this->model('Purchase');
		$user = $this->model('UserProfile');
		$theUser = $user->getUser($_SESSION['login_id']);
		$user_id = $theUser->user_id;
		$myOrders = $purchase->getOrders($user_id);
		$this->view('Purchase/orders',$myOrders);
>>>>>>> 8ac1a8ca910f132f053dd1e3e33d538143a8f238
	}
}