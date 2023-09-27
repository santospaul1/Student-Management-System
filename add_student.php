
<?php
//prevents one from loging direct using url you must login
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    //it will send smone to login page it he want to go to student page uing ur
    elseif($_SESSION['usertype']=='student')   
     {
        header("location:login.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_design {
            background-color: skyblue;
            width:400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        
    </style>
    <?php
    include 'admin_css.php'

    ?>
</head>
<body>
<?php
    include 'admin_sidebar.php'
    
    ?>
    <div class="content">
    <center>
        <h1>Add Student</h1>
        <div class="div_design">
            <form>
                <div>
                    <label>Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary"name="add_student" value="Add Student">
                </div>
            </form>
        </div>
    </center>
    </div>
</body>
</html>