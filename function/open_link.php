<?php
if(!isset($_GET['page']))
{
  $title = 'Home | Sistem Keluar Masuk Pelajar';
  $url_page = 'parts/home/indexbody.php';
  $url_headerscript = 'parts/index_headerscript.php';
  $url_footerscript = 'parts/index_footerscript.php';
}
else if($_GET['page']=='borangkeluar')
{
  $title = 'Borang | Sistem Keluar Masuk Pelajar';
  $url_page = 'parts/home/borangkeluar.php';
  $url_headerscript = 'parts/index_headerscript.php';
  $url_footerscript = 'parts/index_footerscript.php';
}
else if($_GET['page']=='login')
{
  $title = 'Login | Sistem Keluar Masuk Pelajar';
  $url_page = 'parts/home/login.php';
  $url_headerscript = 'parts/index_headerscript.php';
  $url_footerscript = 'parts/index_footerscript.php';
}
 ?>
