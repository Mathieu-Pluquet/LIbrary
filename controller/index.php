<?php
// connection with bdd
include 'model/connect.php';
$manager = new BookManager($db);

if (isset ($_POST['addbook']) && isset ($_POST['title']) && isset ($_POST['author'])) {
    // removes HTML and PHP tags
foreach ($_POST as $key => $value) {
$data[$key]=strip_tags($value);
}
  // create new object Book
  $book = new Book($data);
  $manager->add($book);
}


// return add page or index page
if(isset($_GET['add'])){
  include 'view/add.php';
}
else if (isset($_GET['id'])){
  $get=$manager->get($_GET['id']);
  $book = new Book ($get);
  include 'view/details.php';
}
else {
// display getList
$list = $manager->getList();
foreach ($list as $key => $value) {
  $object[$key]= new Book($value);
}
include 'view/index.php';
}
 ?>
