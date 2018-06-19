<?php
      $conn = new mysqli('localhost', 'root', '', 'vocabulario');


      if ($conn->connect_error) {
      	 echo $error = $conn->connect_error;
      }
?>