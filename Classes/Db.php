<?php


class DB {

    private $_host = "<your host>";
    private $_username = "<your username>";
    private $_password = "<your password>";
    private $_database = "<your db>";
    public $link;

    function __construct() {

        $this->link = mysqli_connect($this->_host, $this->_username, $this->_password) or die(mysqli_error());
        mysqli_select_db($this->link, $this->_database);
    }

    public function insert($todo, $tags) {

        $result = mysqli_query($this->link, "INSERT todo(todo_name,todo_tags) VALUES ('$todo', '$tags')" );
        return $result;
    }

    public function select() {

        $result = mysqli_query($this->link, "SELECT * FROM todo");
        return $result;
    }

    public function delete($id) {
        $result = mysqli_query($this->link, "DELETE FROM todo WHERE id=" . $id . "");
        return $result;
    }
}

?>
