<?php 
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PNG Unitech BookShop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
           

</head><!--/head-->
<center>
<div class="container">


    <form method="post" action="">
        <div id="div_login"><h1><strong>PAPUA NEW GUINEA UNIVERSITY OF TECHNOLOGY <br>BOOKSHOP</strong></h1>
		<center><a href="index.php"><img src="images/home/header.png" alt="" class="img-responsive"/></a></center>
		
            <h1>Student Login</h1>
			<b>STUDENT USERNAME</b>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
			<br>
			<b>STUDENT PASSWORD</b>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        
		<br><br>
		<div><a href="index.php">***BACK TO HOMEPAGE***</a></div>
    </form>

</div>
</div>
</center>
<?php include('include/home/footer.php'); ?>
