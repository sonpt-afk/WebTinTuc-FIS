<?php
$conn = mysqli_connect('localhost', 'root', '', 'tintuc');

if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}