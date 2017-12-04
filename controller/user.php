<?php
// connection with bdd
include 'model/connect.php';
$manager = new UserManager($db);


$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new User($value);
}
if(isset($_GET['user'])){
  var_dump($object);
  include 'view/user.php';
}
 ?>
