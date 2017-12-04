<?php
class BookManager
{
  private $db; // Instance de PDO
public function __construct($db)
{
    $this->setDb($db);
}
// setter //
public function setDb(PDO $db)
{
    $this->db = $db;
}

// add book
public function add ($book) {
  $q=$this->db->prepare("INSERT INTO book SET title=:title, author=:author, resume=:resume, date=:date, category=:category");
  $q->bindValue(":title", $book->getTitle());
  $q->bindValue(":author", $book->getAuthor());
  $q->bindValue(":resume", $book->getResume());
  $q->bindValue(":date", $book->getDate());
  $q->bindValue(":category", $book->getCategory());
  $q->execute();
}

// recover id
public function get($id){
$q=$this->db->prepare("SELECT * from book where id_book=:id");
$q->bindValue(":id",$id);
$q->execute();
return $q->fetch(PDO::FETCH_ASSOC);
}

// display list
public function getList() {
$q=$this->db->query("SELECT * FROM book");
return $q->fetchAll(PDO::FETCH_ASSOC);
}

// display book for getCategory
public function getSort($category){
  $q=$this->db->prepare("SELECT * from book where category=?");
  $q->execute(array($category));
  $book = $q->fetchAll(PDO::FETCH_ASSOC);
  foreach ($book as $key => $value) {
    $object[$key]= new Book($value);
  }
}

}
 ?>
