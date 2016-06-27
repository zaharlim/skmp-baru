<?php
$pages = array();
$pages["index.php"] = "";
$pages["about-us.php"] = "borangkeluar";
$pages["frauensauna.php"] = "Frauensauna";
$pages["custom.php"] = "Beauty Lounge";
$pages["feiertage.php"] = "Feiertage";

$activePage = "";
?>

//menu.php
<?php foreach($pages as $url=>$title):?>
  <li>
       <a <?php if($url === $activePage):?>class="active"<?php endif;?> href="<?php echo $url;?>">
         <?php echo $title;?>
      </a>
  </li>

<?php endforeach;?>

