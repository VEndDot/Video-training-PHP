<?php 
    include("classes/connect.php");

    include("classes/login.php");

    $email = null;
    $password = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = new Login();
        $result = $login->evaluate($_POST);
        if($result !== null){
            echo "<div style='text-align:center; font-size:12px; color:white; background-color:grey;'>";
            echo "The following errors occured<br><br>";
            echo $result;
            echo "</div>";
        }
        else{
            header("Location: profile.php");
            die;
        }
        $password = $_POST['password'];
        $email = $_POST['email'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Mysite | Log in</title>
    <link rel="stylesheet" type="text/css" href="css\loginStyle.css">

</head>

<body style="font-family: tahoma; background-color:#e9ebee;">
    <div class="upperCap">
        <div style="font-size:40px;">Mysite</div> 
        <div class="upperCap__Signup">
            Sign up
        </div>
    </div>
    <div class="form_registration">
        Log in to Mysite<br/><br/>
        <form action="" method="POST">
            <input value="<?php echo $email?>" class="form_registration__input" type="text" name="" placeholder="Email address or phone number"><br><br/>
            <input value="<?php echo $password?>" class="form_registration__input" type="password" name="" placeholder="Password"><br><br/>
            <input class="form_registration__button" type="submit" name="button" value="Log in"><br><br><br>
        </form>
    </div>
</body>
</html>