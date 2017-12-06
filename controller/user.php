<?php
// connection with bdd
include 'model/connect.php';
$manager = new UserManager($db);

// display getlist from user
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new User($value);
}
if(isset($_GET['user'])){
  include 'view/user.php';
}
 ?>
