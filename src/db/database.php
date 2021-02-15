<?php
function dbConnect() {
    
    if(isset($_SESSION['is_connected_to_db'])) {
        return $_SESSION['is_connected_to_db'];
    }
    
    $_SESSION['is_connected_to_db'] = mysqli_connect("localhost", "root", "", "hr_system");
    return $_SESSION['is_connected_to_db'];
}

function query($query) { 
    $connection = dbConnect();
    
    if(!$connection) {
        echo mysqli_connect_error();
        return;
    }
    
    $databaseResult = mysqli_query($connection, $query);
    
    if(!$databaseResult) {
        echo '<div class="db-error">';
        echo mysqli_error($connection);
        echo '</div>';
    }
    return $databaseResult;
}

function getLastInsertedId() {
    return mysqli_insert_id(dbConnect());
}

