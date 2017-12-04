<?php
// connection with bdd
include 'model/connect.php';
$manager = new BookManager($db);
$manager1 = new UserManager($db);


if (isset ($_POST['addbook']) && isset ($_POST['title']) && isset ($_POST['author'])) {
    // removes HTML and PHP tags
foreach ($_POST as $key => $value) {
$data[$key]=strip_tags($value);
}
  // create new object Book
  $book = new Book($data);
  $manager->add($book);
}

if (isset ($_POST['return'])){
  // $get=$manager->getAvailable() ==1;
  // $book = new Book ($get);
  // $manager->update($book);
}

// return add page or index page
if(isset($_GET['add'])){
  include 'view/add.php';
}
else if (isset($_GET['id'])){
  $get=$manager->get($_GET['id']);
  $book = new Book ($get);
  $user = $manager1->getList();
  include 'view/details.php';
}
else {
  if(isset($_POST['sortbook'])){
  $object = $manager->getSort($_POST['category']);
  }
  else
  {
// display getList
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Book($value);
}
}
include 'view/index.php';
}
 ?>
