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

// display list
public function getList() {
$q=$this->db->query("SELECT * FROM book");
return $q->fetchAll(PDO::FETCH_ASSOC);
}
}
 ?>
