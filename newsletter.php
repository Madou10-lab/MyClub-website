<html>
    <head>
        <title>Newsletter</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
        <link rel="stylesheet" href="sign-up.css">
    </head>
    <body>
    <?php
        $connect=mysqli_connect('localhost','root','leo10fcb4ever','usersdb');

        if(isset($_POST['signup-btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        if(empty($name) || empty($email)){
            echo "<script>alert('enter all your personal data please!')</script>";
            echo '<a href="homepage.php"><h1>Go Back</h1></a>';
        }
        else{
            $req = "select * from newsletter WHERE email='$email'";
            $res = mysqli_query($connect,$req);
            $num = mysqli_num_rows($res);
            
            if($num == 1){
                echo "<script>alert('email already taken!')</script>";
                echo '<a href="homepage.php"><h1>Go Back</h1></a>';
            }else{
                    $req = "insert into newsletter(name ,email) values ('$name','$email')";
                    mysqli_query($connect,$req);
                    echo "<h1>Thanks for Subscribing!</h1>";
                    echo '<a href="homepage.php"><h1>Go Back</h1></a>';
            }}}
        $connect->close(); 
        ?>
    </body>