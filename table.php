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
                    <?php
                    $stmt = $pdo->query('SELECT hire.*, book.title, book.author, client.firstname, client.lastname FROM `hire` INNER JOIN `book` ON hire.id_book=book.id INNER JOIN `client` ON hire.id_client=client.id');
                    foreach ($stmt as $row){
                        echo '<tr><td>' . $row['id'] . '<br>' . '</td>';
                        echo '<td>' . $row['title'] . '<br>' . '</td>';
                        echo '<td>' . $row['author'] . '<br>' . '</td>';
                        echo '<td>' . $row['firstname'] . ' ' . $row['lastname'] . '<br>' . '</td>';
                        echo '<td>' . $row['hiredate'] . '<br>' . '</td>';
                        echo '<td>' . $row['returndate'] . '<br>' . '</td></tr>';
                    }
                    $stmt->closeCursor();
                    ?>
        </table>
    </body>
</html>