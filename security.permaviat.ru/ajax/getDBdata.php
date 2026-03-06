<?
    include("../settings/connect_datebase.php");

    $database_query = $mysqli->query("SHOW TABLES FROM `security`");

    echo "Таблицы в БД \n";
    while($row = $database_query->fetch_array()) {
        echo "- " . $row[0] . "\n";
    }
?>