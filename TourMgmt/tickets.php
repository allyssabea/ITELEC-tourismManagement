<?php
session_start();
if ($_SESSION['phone'] == null){
header("Cache-Control: no-cache, must revalidate");
header('Location: /TourMgmt/adlogin.php');
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
table.paleBlueRows {
  font-family: "Times New Roman", Times, serif;
  border: 1px solid black;
  width: 90%;
  height: 50%;
  text-align: center;
  border-collapse: collapse;
}
table.paleBlueRows td, table.paleBlueRows th {
  border: 1px solid #FFFFFF;
  padding: 3px 2px;
}
table.paleBlueRows tbody td {
  font-size: 13px;
  color:black;
}
table.paleBlueRows tr:nth-child(even) {
  background: #D0E4F5;
}
table.paleBlueRows thead {
  background: #0B6FA4;
  border-bottom: 5px solid #FFFFFF;
}
table.paleBlueRows thead th {
  font-size: 17px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #FFFFFF;
}
table.paleBlueRows thead th:first-child {
  border-left: none;
}

table.paleBlueRows tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #333333;
  background: #D0E4F5;
  border-top: 3px solid #444444;
}
table.paleBlueRows tfoot td {
  font-size: 14px;
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
              <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
      <br>
      <br>
      <?php
  $db = mysqli_connect("localhost", "root", "root", "tourdb");
    if(mysqli_connect_error()){
       die("Failed to connect to database");
    }else{
            $q = "SELECT * FROM `tickets` ORDER BY `date` ASC";                                       
            $result = mysqli_query($db, $q);     
            
                if(mysqli_num_rows($result) > 0) { 

                   echo "<center><table class='paleBlueRows'><tbody>"              
                    . "<tr>"
                    ."<thead>"
                    . "<th align='center'>Client Name</th>"
                    . "<th align='center'>Mobile No.</th>"
                    . "<th align='center'>Destination</th>"
                    . "<th align='center'>Date</th>"
                    . "<th align='center'>Package</th>"
                    . "<th align='center'>Price</th>"
                    . "<th align='center'>Pax</th>"
                    . "<th align='center'>Total</th>"
                    ."</thead>"
                    . "</tr>";

                        while ($row = $result->fetch_assoc()){
                            $cname = $row["name"];
                            $mobile = $row["phone"];
                            $dest = $row["destination"];
                            $date = $row["date"];
                            $package = $row["package"];
                            $price = $row["price"];
                            $pax = $row["pax"]; 
                            $total = $row["total"]; 
                            
                             echo "<tr>"
                            ."<td>".$cname."</td>"
                            ."<td>".$mobile."</td>"
                            ."<td>".$dest."</td>"
                            ."<td>".$date."</td>"
                            ."<td>".$package."</td>"
                            ."<td>".$price."</td>"
                            ."<td>".$pax."</td>"
                            ."<td>".$total."</td>"
                            ."</tr>";
                        }
                   echo "</center></table>";
                }
    }
    
?>
  </header>
</body>
</html>