<?php
if(!isset($_SESSION['admins'])){
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php ?> </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px ;
			box-sizing: border-box;
		}
		body{

		background-color: gray;
		}
		.container{
			width: auto;
			height: auto;
			margin: auto;
			background-color: #E0FFFF;
			}
			.header{
				height: 10vh;
				line-height: 10vh;
				padding-right: 16px;
				padding-left: 16px;
				border-bottom: 1px dotted gray; 
				background-image: url('https://commscopechinhhang.com/wp-content/uploads/2020/06/1679098.jpg');
			}
			.main-menu{
				height: 90vh;
				width:250px;
				background-color: #00CED1;	
			}
			.content{
				height: 90vh;
				width: 750px;
				/*background-color: pink;*/
			}
			.main-menu ul{
				list-style-type: none;
				font-size: larger;
			}
			.main-menu li{
				height: 60px;
				line-height:60px;
			}
			.main-menu a{
				text-decoration: none;
				color: black;
				display: block;
				padding-left: 16px;
				padding-right:16px;
				border-bottom: 1px solid black;
			}
			.main-menu a:hover{
				background-color: #AFEEEE;
				color: black;
			}
			.flex {
				display: inline-flex;
				justify-content: space-between;

			}
			.header h3{
				color: #66CDAA;
			}

	
	</style>
</head>
<body>
<div class="container">
<div class="header">
	
	<a style="float:right; color:#66CDAA " href="index.php?module=common&action=logout">Logout</a>
	<?php 
	if(isset($_SESSION['admins'])){
		echo "<h3 style='float:right'>".$_SESSION['admins']['name']."</h3>";
	}

	 ?>
</div>
<div class="flex">
	<div class="main-menu">
	<ul>
		<li>
			<a href="index.php?module=invoice&action=list">Hóa đơn</a>
		</li>
		<li>
			<a href="index.php?module=products&action=list">Sản phẩm</a>
		</li>
		<li>
			<a href="index.php?module=brands&action=list">Hãng sản xuất điện thoại </a>
		</li>
		<li>
			<a href="index.php?module=types&action=list">Loại điện thoại</a>
		</li>
	</ul>
</div>


	