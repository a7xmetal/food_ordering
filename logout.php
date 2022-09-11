<?php


//include constant.php for SITEURL
include('admin/config/constant.php');
    //1.Destory the session
    session_destroy(); //unset $_SESSION['user']

    //2 Redirect to login page
    header('location:'.SITEURL.'index.php');


?>