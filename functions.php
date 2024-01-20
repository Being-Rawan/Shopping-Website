<?php
@include("../login_1/config.php");

session_start();


function db_query(string $query, array $data = array())
{
	$string = "mysql:hostname=localhost;dbname=shopping_db";
	$con = new PDO($string, 'root', '');

	$stm = $con->prepare($query);
	$check = $stm->execute($data);

	if($check)
	{
		$res = $stm->fetchAll(PDO::FETCH_ASSOC);
		if(is_array($res) && !empty($res))
		{
			return $res;
		} 
	}

	return false;
}

function is_logged_in():bool
{

	if(!empty($_SESSION['user_id']))
	{
		return true;
	}

	return false;
}
function is_admin():bool
{
	if(!empty($_SESSION['admin_id']))
	{
		return true;
	}

	return false;
}

function redirect($path):void
{
	header("Location: $path");
	die;
}

function esc(string $str):string
{
	return htmlspecialchars($str);
}

function get_image($path = ''):string 
{
	if(file_exists($path))
	{
		return $path;
	}

	return 'img/no-image.jpg';
}

function user(string $key = '')
{
	if(is_logged_in())
	{
		if(!empty($_SESSION['PROFILE'][$key]))
		{
			return $_SESSION['PROFILE'][$key];
		}
	}

	return false;
}