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
  $q=$this->db->prepare("SELECT * from book where category = ?");
  $q->execute(array($category));
  $book = $q->fetchAll(PDO::FETCH_ASSOC);
  foreach ($book as $key => $value) {
    $book[$key]= new Book($value);
  }
  return $book;
}

// update available
public function update($book){
  $q=$this->db->prepare("UPDATE book set available=:available , id_user =:idu where id_book=:id");
  $q->bindValue(':id',$book->getIdBook());
  $q->bindValue(':idu',$book->getIduser());
  $q->bindValue(':available',$book->getAvailable());
  $q->execute();
}

// get member
public function member(Book $book){
$q=$this->db->prepare("SELECT * from book inner join user on user.id_user = book.id_user where id_book=:id");
$q->bindValue(":id",$book->getIdBook());
$q->execute();
return $q->fetch();
}


}
 ?>
