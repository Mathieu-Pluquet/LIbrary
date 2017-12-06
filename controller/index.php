<?php
// connection with bdd
include 'model/connect.php';
$manager = new BookManager($db);
$manager1 = new UserManager($db);

if (isset ($_POST['addbook']) && isset ($_POST['title']) && isset ($_POST['author']) && isset ($_POST['resume']) && isset ($_POST['date'])) {
// removes HTML and PHP tags
foreach ($_POST as $key => $value) {
$data[$key]=strip_tags($value);
}
  // create new object Book
  $book = new Book($data);
  $manager->add($book);
}

if (isset($_POST['return'])){
  // recover book compared input hidden id
  $book = $manager->get($_POST['id']);
  // create object book
  $book = new book($book);

  // set value available = 1 & delete id_user
  $book->setAvailable(1);
  $book->setId_user(null);

  $manager->update($book);
}

if(isset($_POST['ok'])){
  // recover book compared input hidden id
$book = $manager->get($_POST['id']);
// recover id user compared dropdown
$user = $manager1->get($_POST['category']);
// create object book
$book = new book($book);

// set value available = 0
$book->setAvailable(0);
// if book is disable then user load a book return id for joint
$book->setId_user($user->getIdUser());
$manager->member($book);
$manager->update($book);
}

// return add page or index page
if(isset($_GET['add'])){
  include 'view/add.php';
}
// recovered id
else if (isset($_GET['id'])){
  $get=$manager->get($_GET['id']);
  // create object book
  $book = new Book ($get);
  $list = $manager1->getList();
  // sort category for dropdown
  foreach ($list as $key => $value) {
    $object[$key]= new User($value);
  }
  // $user = $manager->member($book);
  if($book->getAvailable() == false ){
  $user = $manager1->get($book->getIdUser());
}
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
