<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>form</title>
</head>
<body>

<div class="container">
    <form method="post">
        <h1>Contact Us Form</h1>
        <input type="text" placeholder="Enter Your Name" name="Name" class="form-control">
        <input type="text" placeholder="Enter Your Phone Number" name="Phone" class="form-control"> 
        <input type="email" placeholder="Enter Your Email" name="Email" class="form-control"> 
        <input type="text" placeholder="Enter Your Address" name="Address" class="form-control"> 
        <textarea name="Message" cols="30" rows="10"></textarea><br>
        <input type="submit" value="contact us" name="btncontact" class="btn btn-success"> 


    </form>
</div>

<?php
if(isset($_POST['btncontact']))
{
    $name = $_POST["Name"];
    $phone = $_POST["Phone"];
    $email = $_POST["Email"];
    $address = $_POST["Address"];
    $message = $_POST["Message"];


  $query = "INSERT INTO backup( Name, Phone, Email, Address, Message) VALUES ('$name','$phone','$email','$address','$message')";

 $result = mysqli_connect($conn,$query);

    if($result)
    {
        echo"Value Inserted";

    }
    else{
        echo"Value Not Inserted";
    }

}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>