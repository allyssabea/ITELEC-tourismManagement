<?php
session_start();
if ($_SESSION['phone'] == null){
header("Cache-Control: no-cache, must revalidate");
header('Location: /TourMgmt/login.php');
}
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
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 50px;
      font-size: 60px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 40%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 15px 0 #3263cd; 
      }
      .banner {
      position: relative;
      height: 500px;
      background-image: url("img/palawan.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
/*      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }*/
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #3263cd;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 5px 0 #3263cd;
      color: #3263cd;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 28px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.checkbox {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before, label.checkbox:before{
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      label.checkbox:before{ border-radius: 5px}
      input[type=radio]:checked + label:before, label.radio:hover:before,
      input[type=checkbox]:checked + label:before, label.chekbox:hover:before {
      border: 2px solid #3263cd;
      }
      label.radio:after, label.checkbox:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #3263cd;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #3263cd;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #5b82d7;
      }
      @media (min-width: 568px) {
      .name-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      }
      h5{
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
            <li class="nav-item active">
                  <a class="nav-link" href="buy.php">Buy tickets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="destinations.php">Destinations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li> 
          </ul>
        </div>
      </nav>
    </div>
  </header>
   
    <div class="testbox">
        <form method="post">
        <div class="banner">
          <h1>Tour Booking Form</h1>
        </div>
        <div class="item">
          <p>Destination</p>
          <div class="item">
            <input type="text" name="dest" placeholder="destination" />
          </div>
        </div>
        <div class="item">
          <p>When are you planning to visit?</p>
          <input type="date" name="date" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Which package are you gonna avail?</p>
          <select id="package" name="package">
          <option value="A">Package A (P500/pax)</option>
          <option value="B">Package B (P800/pax)</option>
          <option value="C">Package C (P1000/pax)</option>
        </select>  
        </div>
        <div class="item">
          <p>How many are you?</p>
          <input type="text" name="pax" required/>
          
        </div>
        
        <div class="btn-block">
          <input type="submit" method="post" name="buy" value="buy tickets"></button>
        </div>
      </form>
    </div><div>
	<?php
        $db = mysqli_connect("localhost", "root", "root", "tourdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
        if(isset($_POST['buy'])) {
            
            global $dest, $dt, $package, $pax, $total;
            
            $dest = $_POST['dest'];
            $dt = $_POST['date'];
            $package = $_POST['package'];
            $pax = $_POST['pax'];
            
            if ($package=='A'){
                $price = 500;
                $total = ($pax*$price);               
                $query = "INSERT INTO `tickets`(`name`, `phone`, `destination`, `date`, `package`, `price`, `pax`, `total`) VALUES ('".$_SESSION["name"]."','".$_SESSION["phone"]."','".$dest."','".$dt."','".$package."','".$price."','".$pax."','".$total."')";
                    mysqli_query($db, $query);  
                    echo "<br><br><br><br><br><br><br><br><br><br><h5>Hello, ".$_SESSION["name"]."! Booking is successful!"
                            . "<br> You picked package ".$package." for ".$pax." pax."
                            . "<br> Your total is ".$total."</h5>";
            }
            else if ($package=='B'){
                $price = 800;
                $total = ($pax*$price);               
                $query = "INSERT INTO `tickets`(`name`, `phone`, `destination`, `date`, `package`, `price`, `pax`, `total`) VALUES ('".$_SESSION["name"]."','".$_SESSION["phone"]."','".$dest."','".$dt."','".$package."','".$price."','".$pax."','".$total."')";
                    mysqli_query($db, $query);  
                    echo "<br><br><br><br><br><br><br><br><br><br><h5>Hello, ".$_SESSION["name"]."! Booking is successful!"
                            . "<br> You picked package ".$package." for ".$pax." pax."
                            . "<br> Your total is ".$total."</h5>";
            }
             else if ($package=='C'){
                $price = 1000;
                $total = ($pax*$price);               
                $query = "INSERT INTO `tickets`(`name`, `phone`, `desination`, `date`, `package`, `price`, `pax`, `total`) VALUES ('".$_SESSION["name"]."','".$_SESSION["phone"]."','".$dest."','".$dt."','".$package."','".$price."','".$pax."','".$total."')";
                    mysqli_query($db, $query);  
                    echo "<br><br><br><br><br><br><br><br><br><br><h5>Hello, ".$_SESSION["name"]."! Booking is successful!"
                            . "<br> You picked package ".$package." for ".$pax." pax."
                            . "<br> Your total is ".$total."</h5>";
            }
            
        }
    } ?>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>