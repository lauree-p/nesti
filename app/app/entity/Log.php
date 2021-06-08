<?php 

class Log { 

    private $id_user;
    private $date_connection;

    /**
     * Get the value of id_user
     */
    public function getIdUser() {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setIdUser($id_user) {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of date_connection
     */
    public function getDateConnection() {
        return $this->$date_connection;
    }

    /**
     * Set the value of date_connection
     *
     * @return  self
     */
    public function setDateConnection($date_connection) {
        $this->date_connection = $date_connection;

        return $this;
    }

    public function getTDateTime() {
        $date = new DateTime('NOW');
        $result = $date->format('Y-m-d H:i:s');

        return $result;
    }

    public function getTDateTimeToString() {
        date_default_timezone_set("Europe/Paris");
        $date = date('d-m-Y à H:i');
        var_dump($date);
        return $date;
    }
}

?>