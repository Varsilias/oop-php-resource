<?php

class Test extends Db {

    public function getUsers()
    {
        $sql = 'SELECT * FROM users';
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        // var_dump($results);
        
        foreach ($results as $value) {
            echo $value['firstname'].'<br>';
        }
    }

    public function getUsersStmt($firstname, $lastname)
    {
        $sql = 'SELECT * FROM USERS WHERE FIRSTNAME = ? AND LASTNAME = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();
        // var_dump($results);
        
        foreach ($names as $name) {
            echo $name['dob'].'<br>';
        }
    }

    public function setUsersStmt($firstname, $lastname, $dob, $created_at)
    {
        $sql = 'INSERT INTO USERS(firstname, lastname, dob, created_at) VALUES(?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob, $created_at]);
        
    }
}
