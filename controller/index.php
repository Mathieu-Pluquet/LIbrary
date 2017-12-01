<?php
// connection with bdd
include 'model/connect.php';
$manager = new BookManager($db);

// display getList
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Book($value);
}
include 'view/index.php';
 ?>
