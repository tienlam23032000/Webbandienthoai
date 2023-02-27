<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> <?php echo $title; ?> </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
<body>
   <body>
      <!-- header section start -->
      <div class="header_section haeder_main">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="#">Trang chủ</a>
                  <a href="#">Hỏi đáp</a>
                  <a href="#">Về chúng tôi</a>
               </div>
               <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <a class="navbar-brand"><H1>Project 2,3</H1></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <span style="float: right;">
                        <?php 
                        if (isset($_SESSION['user'])) {
                           echo "<span style='margin-right:8px' > Xin chào!!".$_SESSION['user']['name']."</span>";
                           echo "<a href='index.php?module=common&action=logout' style='color: blue;'> Đăng xuất</a>";
                        }
                        else{
                           echo "<a style='color: blue;' href='index.php?module=common&action=login'>Đăng nhập</a>";
                           echo "<a style='color: blueviolet;' href='index.php?module=common&action=register'>Đăng kí</a>";
                        }
                  
                        ?>
                        </span>
                     <ul>
                       <li> <a href="index.php?module=invoice&action=cart"><img src="images/trolly-icon.png"></a>
                        <!-- <li><a href="#"><img src="images/search-icon.png"></a></li> -->
                        <?php 
                     if (isset($_SESSION['user'])) {
         
                           echo "<a style='color:black;' href='index.php?module=invoice&action=list'> <img src='images/down-arrow.png'></i> Lịch sử mua hàng</a>";

                     }

			            ?>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <div class="catagary_section layout_padding">
         <div class="container">
            <div class="catagary_main">
               <div class="catagary_left">
                  <h2 class="categary_text">Product</h2>
               </div>
               <div class="catagary_right">
                  <div class="catagary_menu">
                     <ul>
                        <li><a  class=" <?php if($action == 'home') echo 'active' ?> " href="index.php?module=home&action=home"> <i class="fa fa-home" ></i> Trang chủ</a></li>
                        <li><a class=" <?php if($action == 'list-phone') echo 'active' ?> " href="index.php?module=products&action=list-phone"> Sản phẩm</a></li>
                        <li><a href="#">Nokia</a></li>
                        <li><a href="#">Xiaomi</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Lenovo</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
	<div class="content">

	