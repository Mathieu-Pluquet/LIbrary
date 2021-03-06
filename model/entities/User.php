<?php
class User
{
  private $id_user;
  private $name;
  private $surname;
  private $member;

  // construct and hydrate
    /**
        * @param array $donnees
        */
       public function __construct($donnees)
       {
           $this->hydrate($donnees);
       }

       /**
        * @param  array  $donnees
        */
       public function hydrate($donnees)
       {
           foreach ($donnees as $key => $value) {
               $method = 'set'.ucfirst($key);

               if (method_exists($this, $method)) {
                   $this->$method($value);
               }
           }
       }

    /**
     * Get the value of Id User
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of Id User
     *
     * @param int id_user
     *
     */
    public function setId_user(int $id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of Surname
     *
     * @param string surname
     *
     */
    public function setSurname(string $surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of Member
     *
     * @return string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set the value of Member
     *
     * @param string member
     *
     */
    public function setMember(string $member)
    {
        $this->member = $member;

        return $this;
    }

}
?>
