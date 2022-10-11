<?php

$conn = mysqli_connect("localhost", "root", "", "loginn");

if (!$conn) {
    echo "Connection Failed";
}