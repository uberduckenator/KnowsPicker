<?php
class FavoriteController extends Controller{
	public function index(){
		$favorites = $this->model('Favorite');
		$myFavorites = $favorites->getMy($_SESSION['user_id']);
		$this->view('Favorites/index', $myFavorites);
	}

	public function insert($item_id)
	{
		$favorites = $this->model('Favorites');
		$favorites->item_id = $item_id;
		$favorites->user_id = $_SESSION['user_id'];
		$favorites->insert();
		header(':location');
	}
}
?>
