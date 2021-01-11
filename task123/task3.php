<?php
    /*
        Now, take your output from question 2.  
        Assume that there are multiple users per 
        client.  Display the “number of users” 
        and “client name” for each client.
    */

    require_once("db_connector.php");

    $sql = "SELECT c.name as clientname, COUNT(u.id) as userquantity from client c
            LEFT JOIN users u ON u.client_id = c.id
            GROUP BY c.id";

    $query = $mysqli->query($sql);

?>

<link rel="stylesheet" href="table_style.css">

<table>
    <tr>
        <th>Client</th>
        <th>Users Registered</th>
    </tr>
<?php
    while($row = $query->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row['clientname'] ?></td>
            <td><?= $row['userquantity'] ?></td>
        </tr>    
        <?php
    }
?>
</table>