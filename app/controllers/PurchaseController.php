<?php

class PurchaseController extends Controller
{
	public function index()
	{
		$purchase = $this->model('Purchase');
		$theCart = $purchase->get($_SESSION['user_id']);
		$purchase_id;
		if ($theCart == null)
		{
			$purchase->subtotal = 0;
			$purchase->total = 0;
			$purchase->payment_id = 0;
			$purchase->user_id = $_SESSION['user_id'];
			$purchase->payment_confirm = 0;
			$purchase->shipping_id = 1;
			$purchase->insert();
			$purchase_id = $purchase->purchase_id;
		}
		else
		{
			$purchase_id = $theCart->purchase_id;
		}
		$purchaseDetails = $this->model('PurchaseDetails');
		$inCart = $purchaseDetails->get($purchase_id);

		$this->view('Purchase/index', $inCart);
	}

	public function checkout()
	{
		$userProfile = $this->model('UserProfile');
		$profile = $userProfile->getUser($_SESSION['user_id']);
		$payment = $this->model('Payment');
		if (!isset($_POST['action']))
		{
			//Also need the person information
			//Need to add this...
			$paymentInfo = $payment->get($_SESSION['user_id']);

			//We handle the purchase stuff like before
			$purchase = $this->model('Purchase');
			$purchaseDetails = $this->model('PurchaseDetails');
			//$shippingCost = $this->model('Shi')$purchase->shipping_id;
			$theCart = $purchase->get($_SESSION['user_id']);
			$cartId = $theCart->purchase_id;
			$inCart = $purchaseDetails->get($cartId);

			//User may have payment info setup beforehand
			if ($paymentInfo == null)
			{
				$this->view('Purchase/checkout',['Profile'=>$profile, 'Cart'=>$theCart, 'CartDetails'=>$inCart]);
			}
			else
			{
				$this->view('Purchase/checkout',['Profile'=>$profile, 'Payment'=>$paymentInfo, 'Cart'=>$theCart, 'CartDetails'=>$inCart]);
			}
		}
		//Update payment information
		else
		{
			$payment->cardnumber = $_POST['cardnumber'];
			$payment->cardholder = $_POST['cardholder'];
			$payment->cvv2 = $_POST['cvv2'];
			$expiration_date = $_POST['expiration_month'] . '/' . $_POST['expiration_year'];
			$payment->expiration_date = $expiration_date;
			$payment->user_id = $_SESSION['user_id'];

			$payment->insert();

			header('location:/Purchase/checkout');
		}		
	}

	public function shipping()
	{
		$purchase = $this->model('Purchase');
		if (!isset($_POST['action']))
		{
			
			$user = $this->model('UserProfile');
			$shipping = $this->model('Shipping');
			$allShippingTypes = $shipping->getAll();
			//var_dump($allShippingTypes);
			$theUser = $user->getDetails($_SESSION['user_id']);
			return $this->view('Purchase/shipping', ['Address'=>$theUser, 'ShippingTypes'=>$allShippingTypes]);
		}
		$purchase_id = $purchase->get($_SESSION['user_id']);
		$purchase->puchase_id = $purchase_id;
		$purchase->shipping_id = $_POST['shipping_id'];
		$purchase->updateShipping();
		header('location:/Purchase/placeOrder');
	}

	public function placeOrder()
	{
		//Also need the person information
		//Need to add this...
		$user = $this->model('UserProfile');
		$purchase = $this->model('Purchase');
		$payment = $this->model('Payment');
		$theUser = $user->getDetails($_SESSION['user_id']);
		$paymentInfo = $payment->get($_SESSION['user_id']);
		$shipping = $this->model('Shipping');
		$allShippingTypes = $shipping->getAll();
		$theCart = $purchase->getWithShipping($_SESSION['user_id']);
		$purchaseDetails = $this->model('PurchaseDetails');
		//$shippingCost = $this->model('Shi')$purchase->shipping_id;
		
		$cartId = $theCart->purchase_id;
		$inCart = $purchaseDetails->get($cartId);
		$subtotal = $theCart->subtotal;
		//Need Taxes
		$GST = $subtotal * 0.0125;
		$QST = $subtotal * 0.09975;

		//Need shipping cost
		$shippingCost = $theCart->shipping_cost;
		$total = $subtotal + $GST + $QST + $shippingCost;

		if (!isset($_POST['action']) && !isset($_POST['shipping_id']))
		{
			$this->view('Purchase/placeOrder',['Address'=>$theUser, 'Payment'=>$paymentInfo, 'Cart'=>$theCart, 'CartDetails'=>$inCart, 'GST'=>$GST, 'QST'=>$QST, 'ShippingCost'=>$shippingCost,'Total'=>$total, 'ShippingTypes'=>$allShippingTypes]);
			/*$this->view('Purchase/placeOrder',['Profile'=>$profile, 'Payment'=>$paymentInfo, 'Cart'=>$theCart, 'CartDetails'=>$inCart, 'GST'=>$GST, 'QST'=>$QST, 'Shipping Cost'=>$shippingCost,'Total'=>$total]);*/

		}
		else if (isset($_POST['shipping_id']))
		{
			$purchase->purchase_id = $theCart->purchase_id;
			$purchase->shipping_id = $_POST['shipping_id'];
			$purchase->updateShipping();
			$theCart = $purchase->getWithShipping($_SESSION['user_id']);
			$cartId = $theCart->purchase_id;
			$inCart = $purchaseDetails->get($cartId);
			$subtotal = $theCart->subtotal;
			//Need Taxes
			$GST = $subtotal * 0.0125;
			$QST = $subtotal * 0.09975;

			//Need shipping cost
			$shippingCost = $theCart->shipping_cost;
			$total = $subtotal + $GST + $QST + $shippingCost;

			$this->view('Purchase/placeOrder',['Address'=>$theUser, 'Payment'=>$paymentInfo, 'Cart'=>$theCart, 'CartDetails'=>$inCart, 'GST'=>$GST, 'QST'=>$QST, 'ShippingCost'=>$shippingCost,'Total'=>$total, 'ShippingTypes'=>$allShippingTypes]);
		}
		else
		{
			//Need to calculate tax and shipping cost
			$purchase->purchase_id = $theCart->purchase_id;
			$purchase->total = 0;
			$purchase->status = 1;
			$purchase->purchased_on = date('Y-m-d H:i:s');
			$purchase->updateTotal();
			$purchase->updateStatus();
			$purchase->updateDate();
			header('location:/Purchase/orders');
		}
		
	}

	public function addItem($item_id)
	{
		$purchase = $this->model('Purchase');
		$theCart = $purchase->get($_SESSION['user_id']);
		$purchase_id;
		//No open cart
		if ($theCart == null)
		{
			$purchase->subtotal = 0;
			$purchase->total = 0;
			$purchase->payment_id = 0;
			$purchase->user_id = $_SESSION['user_id'];
			$purchase->payment_confirm = 0;
			$purchase->shipping_id = 1;
			$purchase->insert();
			$purchase_id = $purchase->purchase_id;
		}
		else
		{
			$purchase_id = $theCart->purchase_id;
		}
		$purchaseDetails = $this->model('PurchaseDetails');
		$purchaseDetails->item_id = $item_id;
		$purchaseDetails->purchase_id = $purchase_id;
		$purchaseDetails->quantity = 1;
		$purchaseDetails->insert();

		//Get costs
		$self = $purchaseDetails->getSelf();
		$purchaseCost = $self->price;
		$quantityCost = $purchaseCost * $self->quantity;

		//Recalculate the subtotal
		$subtotalPurchase = $this->model('Purchase');
		$originalSubtotal = $theCart->subtotal;
		$subtotalPurchase->subtotal = $originalSubtotal + $quantityCost;
		$subtotalPurchase->purchase_id = $purchase_id;
		$subtotalPurchase->updateSubtotal();
		//$purchaseDetails->quantity = $_POST['quantity'];

		
		header('location:/Purchase/index');
	}

	//Remove item from cart
	public function remove($purchase_details_id)
	{
		$purchaseDetails = $this->model('PurchaseDetails');
		$purchase = $this->model('Purchase');
		$theItem = $purchaseDetails->getDetails($purchase_details_id);

		//Recalculate the subcost
		$itemPrice = $theItem->price;
		$quantity = $theItem->quantity;
		$quantityCost = $itemPrice * $quantity;

		//Cart
		$theCart = $purchase->get($_SESSION['user_id']);

		//Update subtotal
		$originalSubtotal = $theCart->subtotal;
		$purchase->purchase_id = $theCart->purchase_id;
		$purchase->subtotal = $originalSubtotal - $quantityCost;
		$purchase->updateSubtotal();

		$purchaseDetails->delete($purchase_details_id);
		header('location:/Purchase/remove');
	}

	//Purchase history
	//Could list all details in one view
	//Or could list the orders briefly and have a details view
	public function orders()
	{
		$purchase = $this->model('Purchase');
		$user = $this->model('UserProfile');
		$myOrders = $purchase->getOrders($_SESSION['user_id']);
		$this->view('Purchase/orders', $myOrders);
	}

	//Displays all items in the order/purchase
	public function orderDetails($purchase_id)
	{
		$purchase = $this->model('Purchase');
		$user = $this->model('UserProfile');
		$thePurchase = $purchase->getOrder($purchase_id);
		$theDetails = $this->model('PurchaseDetails')->get($purchase_id);
		$this->view('Purchase/orderDetails', ['Purchase'=>$thePurchase, 'Details'=>$theDetails]);
	}

	public function arrive($purchase_id)
	{
		$purchase = $this->model('Purchase');
		$purchase->purchase_id = $purchase_id;
		$purchase->status = 2;
		$purchase->updateStatus();
		header("location:/Purchase/orders");
	}
}