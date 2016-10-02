<?php

class DbConnector {

    public function connect() {
        $dsn ="mysql:host=localhost;dbname=bookmates";
        $user='root';
        $pass='';
        try {
            $db = new PDO($dsn, $user, $pass);
            return $db;
        }
        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

}

?>
