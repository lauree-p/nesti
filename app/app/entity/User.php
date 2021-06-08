<?php 

class User { 

    private $id_user;
    private $pseudo;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $state;
    private $date_creation;
    private $address_1;
    private $address_2;
    private $pc;
    private $id_town;
    private $zip_code;
    private $role;
    private $date_connection;

    /**
     * Get the value of id_user
     */
    public function getIdUser() {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @return  self
     */
    public function setIdUser($id_user) {
        $this->id_user = $id_user;
        return $this;
    }

    /**
     * Get the value of nickname
     */
    public function getPseudo() {
        return $this->pseudo;
    }

    /**
     * Set the value of nickname
     * @return  self
     */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     * @return  self
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get the value of name
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set the value of name
     * @return  self
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set the value of email
     * @return  self
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPasswordhash() {
        return $this->password;
    }

    /**
     * Set the value of password
     * @return  self
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState() {

        switch ($this->state) {
            case "a":
                $this->state = "Actif";
            break;
            case "w":
                $this->state = "En attente";
            break;
            case "b":
                $this->state = "Bloqué";
            break;
        }
        return $this->state;
    }

    /**
     * Set the value of state
     * @return  self
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }

    /**
     * Get the value of creation_date
     */
    public function getDateCreation() {
        return $this->date_creation;
    }

    /**
     * Set the value of creation_date
     * @return  self
     */
    public function setDateCreation($date_creation) {
        $this->date_creation = $date_creation;
        return $this;
    }

    /**
     * Get the value of address_1
     */
    public function getAddress1() {
        return $this->address_1;
    }

    /**
     * Set the value of address_1
     * @return  self
     */
    public function setAddress1($address_1) {
        $this->address_1 = $address_1;
        return $this;
    }

    /**
     * Get the value of address_2
     */
    public function getAddress2() {
        return $this->address_2;
    }

    /**
     * Set the value of address_2
     * @return  self
     */
    public function setAddress2($address_2) {
        $this->address_2 = $address_2;
        return $this;
    }

    /**
     * Get the value of pc
     */
    public function getPc() {
        return $this->pc;
    }

    /**
     * Set the value of pc
     * @return  self
     */
    public function setPc($pc) {
        $this->pc = $pc;
        return $this;
    }

    /**
     * Get the value of id_town
     */
    public function getIdTown() {
        return $this->id_town;
    }

    /**
     * Set the value of id_town
     * @return  self
     */
    public function setIdTown($id_town) {
        $this->id_town = $id_town;
        return $this;
    }

    /**
     * Get the value of zip_code
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Set the value of zip_code
     *
     * @return  self
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }


    /**
     * Get the value of date_connection
     */
    public function getDateConnection()
    {
        $date = strtotime($this->date_connection);
        $this->date_connection = date('d/m/Y à H:i', $date);
        return $this->date_connection;
    }

    /**
     * Set the value of date_connection
     *
     * @return  self
     */
    public function setDateConnection($date_connection)
    {
        $this->date_connection = $date_connection;

        return $this;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        $role = [];

        $modelCook = new ModelCook();
        $modelAdmin = new ModelAdmin();
        $modelModerator = new ModelModerator();

        $modelCook->findOneBy("id_user", User::getIdUser());
        $modelAdmin->findOneBy("id_user", User::getIdUser());
        $modelModerator->findOneBy("id_user", User::getIdUser());

        if ($modelCook != null) {
            array_push($role,"Chef");
        }
        if ($modelAdmin != null) {
            array_push($role,"Administrateur");
        }
        if ($modelModerator != null) {
            array_push($role,"Modérateur");
        }

        $this->role = implode( " , " , $role);

        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}

?>