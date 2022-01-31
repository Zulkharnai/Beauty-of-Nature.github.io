<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo " connection successful";
}
else{
    echo "Your connection is have some problem it's not connected";
}

mysqli_select_db($con, 'Youtubeuserdata');

$user = $_POST['username'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comment = $_POST['Comment'];

$query = "insert into userinfodata (username, Email, Mobile, Comment)
values ('$user', '$Email','$Mobile','$Comment')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php')
?>