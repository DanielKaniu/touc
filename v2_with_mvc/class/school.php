<?php
//
//Get the list of schools from the database.
class School extends Db_connect {
    //
    //Retrieve the schools.
    public function get_school() {
        //
        //The query to send to the server.
        $sql2 = "SELECT * FROM school order by school asc";
        //
        //Execute the query.
        $stmt2 = $this->connect()->query($sql2);
        //
        //Bring back the results.
        while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
            //
            //Display the list of schools in the select element.
            echo '<option>' . $row2['name'] . '</option>';
        }
    }

}
