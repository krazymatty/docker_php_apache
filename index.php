<?php

$connect = mysqli_connect(
    'db', #service name
    'learn_php',
    'password',
    'learn_php'
);
$tableName = "the_table_name";
$query = "SELECT * FROM $tableName";
$response = mysqli_query($connect, $query);

while ($i = mysqli_fetch_assoc($response)) {

}
