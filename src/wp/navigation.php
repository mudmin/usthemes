<?php
if(file_exists($abs_us_root.$us_url_root."wp-config.php")){
  include $abs_us_root.$us_url_root."wp-config.php";
}else{
  die("wp-config.php not found");
}

get_header();
    if(isset($_GET['err'])){
      err("<font color='red'>".$err."</font>");
    }

    if(isset($_GET['msg'])){
      err($msg);
    }
