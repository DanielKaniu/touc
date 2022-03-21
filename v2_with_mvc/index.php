<?php
//
//Include the autoloader file to auto-process the respective classes in use in
//in this file.
include 'includes/autoloader.php';
/*
Call the school class. */
$sch = new School();
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
    /*
    Use the member class to save the new member in the database.*/
    $member = new Member($name, $email, $school);
    /*
    Add the members. */
    $member->add_member($name, $email, $school);
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
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
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
                        /*
                        Get the list of schools. */
                        $sch->get_school();
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
                        /*
                        Get the list of schools. */
                        $sch -> get_school();
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
                    /*
                    Bring back the list of members for the selected school. */
                    $members = new Fetch_member($selected_school);
                    /*
                    Get the members. */
                    $members->get_member();
                    //
                    //return the contents of the table
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>