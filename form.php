<?php
    $con=mysqli_connect('localhost:3306','root','') or die(mysqli_error());
    mysqli_select_db($con,'coffee') or die(mysqli_error());
    if(isset($_POST['firstname']))
    {
        $fname = $_POST['firstname'];
        $email = $_POST['mail'];
        $pnum = $_POST['number'];
        if($fname!="" && $email!="" && $pnum!="")
        {
            $query = "INSERT INTO customers VALUES('$fname','$email','$pnum')";
            $result = mysqli_query($con,$query) or die(mysqli_error());
            echo "<h1>Registered Successfully!...</h1>";
        }
        else{
            echo "One of the Field is empty";
        }
    }

?>