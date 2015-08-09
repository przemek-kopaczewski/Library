<?php
require 'connect.php';

?>
<html>
    <head>
    </head>
    <body>
        <table border>
            <tr>
                <td>
                    id
                </td>
                <td>
                    tytuł
                </td>
                <td>
                    Author
                </td>
                <td>
                    wypożyczający
                </td>
                <td>
                    data wypożyczenia
                </td>
                <td>
                    data zwrotu
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT id FROM hire');
                    foreach($stmt as $row)
                    {
                        echo $row['id'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT title FROM book');
                    foreach($stmt as $row)
                    {
                        echo $row['title'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT author FROM book');
                    foreach($stmt as $row)
                    {
                        echo $row['author'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT firstname, lastname FROM client');
                    foreach($stmt as $row)
                    {
                        echo $row['firstname'].'<br>'. $row['lastname'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT hiredate FROM hire');
                    foreach($stmt as $row)
                    {
                        echo $row['hiredate'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
                <td>
                    <?php
                    $stmt = $pdo->query('SELECT returndate FROM hire');
                    foreach($stmt as $row)
                    {
                        echo $row['returndate'].'<br>';
                    }
                    $stmt->closeCursor();
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>