
<?php
    /*
        Write a Postres SQL query that takes the data from 
        2 tables and outputs “user’s name”, “user’s id” and 
        “user’s client name”.  The tables are named “users” 
        and “clients”.  “users” contains the columns id, name, 
        password, username, client_id as columns.  clients contains 
        id, name, address, city, state, zip_code.  Each column of 
        the output should be properly labeled as indicated in the 
        initial request.

    */
    /*
        SELECT u.name as nick, u.id as uid, c.name as name FROM users u 
        INNER JOIN client c ON u.client_id = c.id
    */

    require_once('db_connector.php');

    

    $sql = "SELECT u.name as nick, u.id as uid, c.name as name FROM users u 
            INNER JOIN client c ON u.client_id = c.id";

    $query = $mysqli->query($sql);

    ?>
   <link rel="stylesheet" href="table_style.css">

    <table>
        <tr>
            <th>Id</th>
            <th>Client</th>
            <th>User's Name</th>
        </tr>

    <?php
    while($row = $query->fetch_assoc()) {
        ?>

        <tr>
            <td><?= $row['uid'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['nick'] ?></td>
        </tr>

        <?php
    }
    ?>

    </table>


