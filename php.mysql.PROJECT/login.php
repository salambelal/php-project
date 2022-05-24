<?php
require('config.php');



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if(isset($_POST['email'] ) && isset($_POST['password'])){

    $statement = $DB->prepare("SELECT * FROM users WHERE email= :email AND password = :password");
    $statement -> bindValue(":password", $_POST['password'] );
    $statement -> bindValue(":email", $_POST['email'] );
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
   
    if(!empty($users)){
       header("location: index.php");
}

else{
  echo  ("<span style='color: red'> Something went wrong <span>");
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">

    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <div class="container">

            <div class="row"></div>

            <div class="col-sm-3" id="forms">
            <h1 style="font-size: 100px;"> Animall.</h1>
                <h1> Login </h1>

                
        

                <label for="email"> Email: </label>
                <input class="form-control" type="email" name="email" placeholder="Email" required> <br>
                <?php
               
                ?>
                <label for="password"> Password: </label>
                <input class="form-control" type="password" name="password" placeholder="password" required><br>

             
            

                <hr class="mb-3">

                <input id="button" class="btn btn-outline-light" type="submit" name="create">
                <button style="width: 48%;" class="btn btn-outline-light">
                    <a  id="btn" href="registration.php"> Create account </a>

                </button>
                </div>

            </div>
        </div>
    </form>

    </div>
    </div>
    </div>
    </div>

</body>

</html>