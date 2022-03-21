<?php
//
//Add a new member to the school.
class Member extends Db_connect{
    //
    //Properties provided by the user.
    public $name;
    public $email;
    public $school;
    //
    //Construct this class.
    public function __construct($name, $email, $school){
        //
        //Initialize the property values.
        $this->name = $name;
        $this->email = $email;
        $this->school = $school;
    }
    //
    //Add a new member into the database.
    public function add_member(){
        //
        //The query.
        $sql = "insert into event (name, email, school) 
                values ('$this->name', '$this->email',
                '$this->school')";
        //
        //Send the query to the database. This is the end of the execution 
        //because it is an insert statement.
        $stmt = $this->connect()->query($sql);
    } 
}