<?php
    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");
    

    $sql = "SELECT studentid, dob, firstname, lastname, house, town,
    county, country, postcode FROM student";
   $result = mysqli_query($conn, $sql);

   echo "(<table border='1'>)";
   echo "<tr>
    <th>Student ID</th>
    <th>Student First Name</th>
    <th>Student Last Name</th>
    <th>Date of Birth</th>
    <th>Street Address</th>
    <th>Town</th>
    <th>County</th>
    <th>Country</th>
    <th>Postcode</th>
    <th>Delete</th>
        </tr>";

   while ($row = mysqli_fetch_assoc($result)) {
    
        echo "<tr>
                <td>{$row ['studentid']}</td>
                <td> {$row['firstname']}</td>
                <td>{$row['lastname']}</td>
                <td> {$row['dob']}</td>
                <td>{$row['house']}</td> 
                <td>{$row['town']}</td>
                <td>{$row['county']}</td>
                <td>{$row['country']}</td>
                <td>{$row['postcode']}</td>
                <td><input type='checkbox' name='row_id[]' value=''  />
         </tr>";
    }
    echo "</table>";

   echo template("templates/partials/footer.php")
?>


