<?php

include("../settings/connect_datebase.php");


$database_query = $mysqli->query("SELECT * FROM `users`");

echo "Юзеры в БД \n";
    while($row = $database_query->fetch_array()) {
        echo "- " . $row[0] . ":".$row[1].":".$row[2]."\n";
    }

?>