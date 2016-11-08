<?php
/*
 * create table Form(
                        id int AUTO_INCREMENT NOT NULL,
                        name varchar(255) NOT NULL UNIQUE,
                        url varchar(255) NOT NULL,
                        PRIMARY KEY(id))
     ENGINE=InnoDB, CHARACTER SET=utf8"
 * 
 */

class Form {
    private $id;
    private $name;
    private $url;
    
    public function returnQuestions() {
        
    }
    
    public function setName($newName) {
        $this->name = $newName;
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getUrl() {
        return $this->url;
    }
    
    
    
    
}



?>