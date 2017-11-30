<?php
class User
{
  private $id_user;
  private $name;
  private $surname;
  private $member;


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
    public function setIdUser($id_user)
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
    public function setName($name)
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
    public function setSurname($surname)
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
    public function setMember($member)
    {
        $this->member = $member;

        return $this;
    }

}
?>
