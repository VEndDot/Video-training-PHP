<?php 
    include("classes/connect.php");

    include("classes/signup.php");

    $first_name = null;
    $last_name = null;
    $gender = null;
    $email = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $signup = new Signup();
        $result = $signup->evaluate($_POST);
        if($result !== null){
            echo "<div style='text-align:center; font-size:12px; color:white; background-color:grey;'>";
            echo "The following errors occured<br><br>";
            echo $result;
            echo "</div>";
        }
        else{
            header("Location: login.php");
            die;
        }
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Mysite | Signup</title>
    <link rel="stylesheet" type="text/css" href="css/signupStyle.css">
</head>

<body style="font-family: tahoma; background-color:#e9ebee;">
    <div class="upperCap">
        <div style="font-size: 40px;">Mysite</div> 
        <div class="upperCap__Signup">Log in</div>
    </div>
    <div class="form_registration">
        Sign up to Mysite<br/><br/>
        <form action="" method="POST">
            <input  value = "<?php echo $first_name?>" class="form_registration__input" type="text" name="first_name" placeholder="Enter your first name"><br><br/>
            <input value = "<?php echo $last_name?>" class="form_registration__input" type="text" name="last_name" placeholder="Enter your last name"><br><br/>
            <span style="font-weight: normal;">Enter your Gender:</span><br/>
            <select class="form_registration__input" name="gender" >
                <option ><?php echo $gender?></option>
                <option>Male</option>
                <option>Female</option>
            </select><br/><br/>
            <input value = "<?php echo $email?>" class="form_registration__input" type="text" name="email" placeholder="Email address or phone number"><br><br/>
            <input class="form_registration__input" type="password" name="password" placeholder="Password"><br><br/>
            <input class="form_registration__input" type="password" name="retype_password" placeholder="Retype Password"><br><br/>
            <input class="form_registration__button" type="submit" value="Sign up"><br><br><br>
        </form>
    </div>
</body>
</html>