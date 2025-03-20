<?php

if(isset($_COOKIE['Anubhav'])) {
    
    $cookie_value = $_COOKIE['Anubhav'];
    echo "Cookie Value: " . $cookie_value;
} else {
    echo "Cookie is not set.";
}
?>