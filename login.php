<?php

if(isset($_POST['but_submit'])){

$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from users where Username='".$uname."' and Password=md5('".$password."')";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
        header('Location: home.php');
		
    }else{
		echo '<script language="javascript">';
		echo 'alert("ei menny ei")';
		echo '</script>';
		exit;
    }

}

}
?>