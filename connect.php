<?php

  try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=library;encoding=utf8', 'library', 'library');
      echo 'Połączenie nawiązane!<br>';
   }
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   }
?>