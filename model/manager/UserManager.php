<?php
class UserManager
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

// display user
public function getList() {
$q=$this->db->query("SELECT * FROM user");
return $q->fetchAll(PDO::FETCH_ASSOC);
}

// recover id
public function get($id){
$q=$this->db->prepare("SELECT * from user where id_user=:id");
$q->bindValue(":id",$id);
$q->execute();
return new user($q->fetch());
}


}
 ?>
