<?php
  class Book
  {
    private $id_book;
    private $id_user;
    private $title;
    private $author;
    private $resume;
    private $date;
    private $available;
    private $category;

    const category = ["novel", "poem", "adventure"];


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


    public function setCategory($category){
      if(in_array($category, static::category)){
        $this->category=$category;
      }
    }

    public function getCategory() {
      return $this->category;
    }


    /**
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param string title
     *
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     *
     * @param string author
     *
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of Resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of Resume
     *
     * @param string resume
     *
     */
    public function setResume(string $resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of Date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     *
     * @param date date
     *
     */
    public function setDate( $date)
    {
        $this->date = $date;

        return $this;
    }


    /**
     * Get the value of Id Book
     *
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->id_book;
    }

    /**
     * Set the value of Id Book
     *
     * @param int id_book
     *
     */
    public function setId_book(int $id_book)
    {
        $this->id_book = $id_book;

        return $this;
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
    public function setId_user($iduser)
    {
        $this->id_user = $iduser;

        return $this;
    }


    /**
     * Get the value of Available
     *
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of Available
     *
     * @param boolean available
     *
     */
    public function setAvailable(int $available)
    {
        $this->available = $available;

        return $this;
    }


    /**
     * Set the value of Id Book
     *
     * @param mixed id_book
     *
     * @return self
     */
    public function setIdBook($id_book)
    {
        $this->id_book = $id_book;

        return $this;
    }

    /**
     * Set the value of Id User
     *
     * @param mixed id_user
     *
     * @return self
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }


}

 ?>
