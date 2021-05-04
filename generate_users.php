<?php
    $open = fopen('userData.txt','r');
    include_once ('libs/createTable.php');

    write_to_table($open);
?>
