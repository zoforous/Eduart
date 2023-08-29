<script >
    document.cookie = "name=eduart";
    document.cookie = "name=eduart; secure";
</script>

<?php

$db = mysqli_connect('localhost', 'root', '', 'admission') or die("Could not connect to Database");

// if(isset($_POST['add_name'])){
    $a = $_POST['cname'];
    $b = $_POST['gname'];
    $c = $_POST['cno'];
    $d = $_POST['gcno'];
    $e = $_POST['mail'];
    $f = $_POST['state'];
    $g = $_POST['course'];
    $h = $_POST['laq'];
    $query = "INSERT INTO user_details(Name, GName, Contact_No, GContact_No, Email, State, Course, Last_Q) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";
    $result = mysqli_query($db, $query) or die("Could not execute querry");
    if ($result) {
        header("location: index.html");
    }
    else{
        echo("Error 404");
    }
    // echo($a." ".$b." ".$c." ".$d." ".$e." ".$f." ".$g." ".$h);
// }