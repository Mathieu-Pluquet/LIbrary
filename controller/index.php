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
  // on recupere le book par rapport a l id de l'input hidden
  $book = $manager->get($_POST['id']);
  // on creer le livre
  $book = new book($book);

  // on set la valeur disponible a 1
  $book->setAvailable(1);
  $book->setId_user(null);

  $manager->update($book);
}

if(isset($_POST['ok'])){
// on recupere le book par rapport a l id de l'input hidden
$book = $manager->get($_POST['id']);
// on recupere l'id de l'utilisateur par rapport au dropdown
$user = $manager1->get($_POST['category']);
// on creer le livre
$book = new book($book);

// on set la valeur disponible a 0
$book->setAvailable(0);
// si le livre est pu disponible un user la emprunter on rentre son id pour faire la jointure
$book->setId_user($user->getIdUser());
$manager->member($book);
$manager->update($book);
}

// return add page or index page
if(isset($_GET['add'])){
  include 'view/add.php';
}
else if (isset($_GET['id'])){
  $get=$manager->get($_GET['id']);
  $book = new Book ($get);
  $list = $manager1->getList();
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
