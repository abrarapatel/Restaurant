<?php
$conn = mysqli_connect('localhost', 'root', '', 'restaurant_db');

if (!$conn) {
    echo "<script>alert('Sorry! connection destroyed, please try again !');</script>";
}
