<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourism Management System Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="footer.css">
  <style>
      * {box-sizing: border-box;}

/* Style the input container */
.input-container {
  display: flex;
  width: 80%;
  margin-bottom: 15px;
  float: right;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 60%;
  padding: 15px 20px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

            .center {
              width:50%;
              height:350px;
              position: fixed;
              background-image: url(img/coconut.jpg);
              top: 40%;
              left: 45%;
              margin-top: -100px;
              margin-left: -300px;          
              padding: 60px 0;
              text-align: center;
              border: solid;
              border-color: black;
              }
            h1{
                font-size: 35px;
                font-family: comic sans ms;
                color: green;
            }

  </style>
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Lakbay PH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-lg-auto">
            <li>
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
    <div class="center"> 
        <form action="" method="post">
  <h3>Log-in to see bookings</h3>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="phone" name="phone">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn" name="login">LOGIN</button>
  <center><a href="login.php" style="color: aquamarine">Login as Client</a></center>
</form>
    
    
<?php  $db = mysqli_connect("localhost", "root", "root", "tourdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
        if(isset($_POST['login'])) {
            
            $_SESSION["phone"] = $_POST['phone'];
            $_SESSION["pword"] = $_POST['psw'];

            $q = "SELECT * FROM `admin` WHERE `mobile` = '".$_SESSION["phone"]."' AND  `password` = '".$_SESSION["pword"]."'";
                                                   
            $result = mysqli_query($db, $q);     
           
               if(mysqli_num_rows($result) > 0) {
                     while ($row = $result->fetch_assoc()){
                         $_SESSION["name"]=$row["name"];
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="tickets.php" </script>';
                     }
                }
                else {
                       echo "<h6 style='color: red; text-align: center;'>"
                    . "Please try again</h6>";
                }
        }
    } ?>
	  </div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>