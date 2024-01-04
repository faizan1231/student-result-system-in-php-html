<?php
$conn= mysqli_connect('localhost','root','','strms');
if(!$conn)
{
    die ("connection failed". mysqli_connect_error());
}
