<?php

class control
{
	function__construct()
	{
		$url = $_SERVER['PATH_INFO'];

		switch($url)
		{
			case '/admin':
			include_once('index.php');
			break;

			case '/dashboard':
			include_once('dashboadrd.php');
			break;


			case '/add user':
			include_once('add_user.php');
			break;

			case '/manage user':

			include_once('manage_user.php');
			break;

			case '/add employee':
			include_once('add_employee.php');
			break;
			case '/manage employee':
			include_once('manage_employee.php');
			break;

			case '/add category':
			include_once('add_category.php');
			break;

			case '/manage category':
			include_once('manage_category.php');
			break;

			case '/add product':
			include_once('add_product.php');
			break;

			case '/manage product':
			include_once('manage_product.php');
			break;

			case '/header':
			include_once('header.php');
			break;

			include_once('footer.php');
			case '/footer':
			break;

			case '/add area':
			include_once('add_area.php');
			break;

			case '/add city':
			include_once('add_city.php');
			break;
		}
	}
}

$obj = new control;
?>