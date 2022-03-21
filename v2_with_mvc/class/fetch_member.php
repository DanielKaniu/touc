<?php

//
//Get the members associated with the selected school.
class Fetch_member extends Db_connect {

    //
    //The school picked from the select element.
    public $selected_school;

    //
    //Construct this class.
    public function __construct($selected_school) {
        //
        //Initialize the property value.
        $this->selected_school = $selected_school;
    }

    //
    //Retrive the members.
    public function get_member() {
        //
        //The query statement.
        $query = "SELECT * FROM member where school = '$this->selected_school' order by member asc";
        //
        //Execute the query.
        $statement = $this->connect()->query($query);
        //
        //Bring back the results.
        while ($row1 = $statement->fetch(PDO::FETCH_ASSOC)) {
            //
            //Display the members.
            echo
            '<tr><td>' . $row1['member'] . '</td>'
            . '<td>' . $row1['name'] . '</td>'
            . '<td>' . $row1['email'] . '</td>'
            . '<td>' . $row1['school'] . '</td></tr>';
        }
    }
}
