<?php 
$error = "Đăng nhập để tiếp tục!";
if(isset($_POST['btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT id,name FROM customers WHERE (email='$email' OR phone_no='$email') AND password = '$password' ";
	$result = mysqli_query($conn,$sql);
	if($result == false){
	echo "Error:".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result) == 1){
		//dang nhap thanh cong
		$row = mysqli_fetch_array($result);
		$_SESSION['user']['id'] = $row['id'];
		$_SESSION['user']['name'] = $row['name'];
		header("location:index.php");
	}
	else{
		// dang nhap that bai
		$error = "Thông tin không chính xác!";
	} 
}

	?>
<head>
<!DOCTYPE html>
<html>
<head>
	<title>Login customer</title>

<!-- <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-black-friday-black-gold-black-technology-float-image_18646.jpg');
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }
        .login{
            width: 320px;
            height: 420px;
            background-image: url('https://png.pngtree.com/thumb_back/fw800/back_our/20190628/ourmid/pngtree-gradient-smudged-hand-drawn-powder-cloud-sky-background-image_274314.jpg ');
            color: #fff;
            top: 50%;
            left:50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
      
        h1,h2{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .login p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .login input[type="text"], input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background-color: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .login input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #00BFFF;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }
        .login input[type="submit"]:hover{
            cursor: pointer;
            background: #FFB6C1;
            color: #000;
        }

</style> -->
<style>
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400');

body, html {
  font-family: 'Source Sans Pro', sans-serif;
  background-color: #1d243d;
  padding: 0;
  margin: 0;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
}

.container{
  margin: 0;
  top: 50px;
  left: 50%;
  position: absolute;
  text-align: center;
  transform: translateX(-50%);
  background-color: rgb( 33, 41, 66 );
  border-radius: 9px;
  border-top: 10px solid #79a6fe;
  border-bottom: 10px solid #8BD17C;
  width: 400px;
  height: 500px;
  box-shadow: 1px 1px 108.8px 19.2px rgb(25,31,53);
}

.box h4 {
  font-family: 'Source Sans Pro', sans-serif;
  color: #5c6bc0; 
  font-size: 18px;
  margin-top:94px;;
}

.box h4 span {
  color: #dfdeee;
  font-weight: lighter;
}

.box h5 {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 13px;
  color: #a1a4ad;
  letter-spacing: 1.5px;
  margin-top: -15px;
  margin-bottom: 70px;
}

.box input[type = "text"],.box input[type = "password"] {
  display: block;
  margin: 20px auto;
  background: #262e49;
  border: 0;
  border-radius: 5px;
  padding: 14px 10px;
  width: 320px;
  outline: none;
  color: #d6d6d6;
      -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;
  
}
::-webkit-input-placeholder {
  color: #565f79;
}

.box input[type = "text"]:focus,.box input[type = "password"]:focus {
  border: 1px solid #79A6FE;
  
}

a{
  color: #5c7fda;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

 label input[type = "checkbox"] {
  display: none; /* hide the default checkbox */
}

/* style the artificial checkbox */
label span {
  height: 13px;
  width: 13px;
  border: 2px solid #464d64;
  border-radius: 2px;
  display: inline-block;
  position: relative;
  cursor: pointer;
  float: left;
  left: 7.5%;
}

.btn1 {
  border:0;
  background: #7f5feb;
  color: #dfdeee;
  border-radius: 100px;
  width: 340px;
  height: 49px;
  font-size: 16px;
  position: absolute;
  top: 79%;
  left: 8%;
  transition: 0.3s;
  cursor: pointer;
}

.btn1:hover {
  background: #5d33e6;
}

.rmb {
  position: absolute;
  margin-left: -24%;
  margin-top: 0px;
  color: #dfdeee;
  font-size: 13px;
}

.forgetpass {
  position: relative;
  float: right;
  right: 28px;
}

.dnthave{
    position: absolute;
    top: 92%;
    left: 24%;
}

[type=checkbox]:checked + span:before {/* <-- style its checked state */
    font-family: FontAwesome;
    font-size: 16px;
    content: "\f00c";
    position: absolute;
    top: -4px;
    color: #896cec;
    left: -1px;
    width: 13px;
}

.typcn {
  position: absolute;
  left: 339px;
  top: 282px;
  color: #3b476b;
  font-size: 22px;
  cursor: pointer;
}      

.typcn.active {
  color: #7f60eb;
}

.error {
  background: #ff3333;
  text-align: center;
  width: 337px;
  height: 20px;
  padding: 2px;
  border: 0;
  border-radius: 5px;
  margin: 10px auto 10px;
  position: absolute;
  top: 31%;
  left: 7.2%;
  color: white;
  display: none;
}

.footer {
    position: relative;
    left: 0;
    bottom: 0;
    top: 605px;
    width: 100%;
    color: #78797d;
    font-size: 14px;
    text-align: center;
}

.footer .fa {
  color: #7f5feb;;
}
	</style>
</head>
<!-- <body>
<div class="login" >
	<h1>Đăng nhập</h1>
	<h2 style="color: red"> <?php echo $error; ?> </h2>
	<form method="POST" >
        <p>Nhập email hoặc số điện thoại</p>
		<input type="text" name="user" placeholder="Email or phone:" required >
		<p>Nhập mật khẩu</p>
		<input type="password" name="password" placeholder="Mật khẩu:" required=> 
		<br><br>
		<input type="submit" name="btn" value="Đăng nhập">
	</form>
    </div> -->

    <body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <h2 style="color: red"> <?php echo $error; ?> </h2>
    <form name="form1" class="box" onsubmit="return checkStuff()" method="POST">
      <h4>Đăng nhập</h4>
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
        <input type="submit" value="Đăng nhập" name="btn" class="btn1">
      </form>
</div>
</html>
</body>