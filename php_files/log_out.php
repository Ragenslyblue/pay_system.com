<?php

/**
 * @author pakisab
 * @copyright 2016
 */

session_start();
if(session_destroy()){
    header('Location:' . $BASE_URL . 'index.php?page=login');
}

?>