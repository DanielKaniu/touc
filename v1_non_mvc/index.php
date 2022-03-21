<?php
//
//Include the configuration details.
include_once './config.php';
//
//Take action depending on the pressed button...
//
//...the add new member button.
if (isset($_REQUEST['submit'])) {
    //
    //Get the details provided by the user...
    //
    //...name...
    $name = $_REQUEST["name"];
    //
    //...email...
    $email = $_REQUEST["email"];
    //
    //...school.
    $school = $_REQUEST["school"];
    //
    //Save the data in the database.
    //
    //...the sql statment...
    $sql = "insert into member(name, email, school) "
            . "values('$name', '$email', '$school')";
    //
    //...execute the query in the database
    $pdo->query($sql);
}
//
//...the view schools button.
elseif (isset ($_REQUEST['btn'])) {
    //
    //List the members of the selected school.
    $selected_school = $_REQUEST["selected_school"];
}
?>
<html>
    <head>
        <!--
        Handle the view even for smaller devices. -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
        The webpage's title. -->
        <title>Toucan Demo</title>        
        <!--
        Style the current window's elements. -->
        <style>
            *{
                border-radius: 10%;
            }
            /*
            Make the labels and select tag display in a block form. */
            label, select{
                display: block;
                margin-bottom: 2.5%;
            }
            /*
            Apply flex box to display the form and members well. */
            .container{
                display: flex;
                flex-wrap: wrap;
            }
            /*
            Align the containers accordingly. */
            .left, .right, h2{
                margin-left: 10%;
            }
            /*
            Style the reporting tables. */
            table{
                width: 100%;
                table-layout: auto;
                border-collapse: collapse;
            }
            /*
            Add borders within the table. */
            th, td {
                border: 0.5px solid;
                color: brown;
            }
            /*
            Styling for mobile devices and tablets. */
            @media only screen and (max-width: 600px) {
                .left, .right{
                    margin-left: 0%;
                }
            }
        </style>
    </head>

    <body>
        <!--
        Page heading. -->
        <h2>TOUCAN DEMONSTRATION</h2>
        <!--
        The mother container. -->
        <div class="container">
            <!--
            The container housing the elements for adding a new member. -->
            <div class="left">
                <!--
                The form responsible for adding a new member. -->
                <form action="" method="post">
                    <!--
                    The title. -->
                    <h3> Add a new member </h3>
                    <!--
                    The member name. -->
                    <label>
                        Name: 
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Enter name here"
                            required="true"/>
                    </label>
                    <!--
                    The member email. -->
                    <label>
                        Email: 
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Enter email here."
                            required="true"/>
                    </label>
                    <!--
                    A selector for the school name. -->
                    <select name="school">
                        <?php
                        //
                        //The query to pass to the database.
                        $sql = "SELECT * FROM school order by school asc";
                        //
                        //Execute the query.
                        $stmt = $pdo->query($sql);
                        //
                        //Bring back the results.
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            //
                            //Display the list of schools.
                            echo '<option>' . $row['name'] . '</option>';
                        }
                        ?>
                    </select>
                    <!--
                    The submit button. -->
                    <button name="submit" type="submit" value="member">Submit</button>
                </form>
            </div>
            <div class="right">
                <!--
                The title. -->
                <h3>
                    Select a school to list its members.
                </h3>
                <!--
                The form responsible for listing the list members of the 
                selected school. -->
                <form action="" method="post">
                    <!--
                    Select the school name. -->
                    <select name="selected_school">
                        <?php
                        //
                        //The query to send to the server.
                        $sql2 = "SELECT * FROM school order by school asc";
                        //
                        //Execute the query.
                        $stmt2 = $pdo->query($sql2);
                        //
                        //Bring back the results.
                        while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            //
                            //Display the list of schools in the select element.
                            echo '<option>' . $row2['name'] . '</option>';
                        }
                        ?>
                    </select>
                    <!--
                    The submit button. -->
                    <button name="btn" type="submit" value="school">View members of the School</button>
                </form>
                <!--
                List the members of the selected school in a tabular format. -->
                <div>
                    <?php
                    //
                    //The query statement.
                    $query = "SELECT * FROM member where school = '$selected_school' order by member DESC";
                    //
                    //Execute the query.
                    $statement = $pdo->query($query);
                    //
                    //Open a html table
                    echo "<table>";
                    //
                    $table = '';
                    //
                    //Define the column headings of the table.
                    $table .= "<thead><th>Member</th>";
                    $table .= "<th>Name</th>";
                    $table .= "<th>Email</th>";
                    $table .= "<th>School</th></thead>";
                    //
                    echo $table;
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
                    //
                    //return the contents of the table
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>