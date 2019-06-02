<?php
// Start the session
session_start();

if (isset($_SESSION['username']))

{
	?>

<!DOCTYPE html>
<html>
<head>
<title>User In|Care Giver's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('../images/join1.jpg');">

<div class="topnav" id="myTopnav">
	<span class="navbar-brand" style="color: green;padding: 20px">
        	www.CareGiver.com
        </span>
  <div class="nav_right" style="float: right;">
  <a href="adminui.php">LIST OF USER</a>
  <a href="join.php" class="active">LIST OF JOINER</a>
  <a href="bookingser.php"">BOOKING SERVICE</a>
  <a href="usercontact.php">USER CONTACTS</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</div>
<div class="divider"></div>
			

		<h2 style="color: red">
      <center><tr>
        <td>
        <h6><button style="margin-left: 93%"><a href="adminlogin.html">LOGOUT</a></button></h6>
      </td>


      <td>
        
        <?php
          echo 'Welcome ' . $_SESSION["username"];
        ?>
        
      </td><br>
    </tr></center>
  </h2><br>

  <h2><center><strong>LIST OF OUR JOINER'S</strong></center></h2>
  <br>

    <table class="table table-stripped">
   <th>
      <td><strong>Name</strong></td>
      <td><strong>Gender</strong></td>
      <td><strong>Address</strong></td>
      <td><strong>Mobile Number</strong></td>
      <td><strong>Email Id</strong></td>
      <td><strong>Adhar Card Number</strong></td>
      <td><strong>Services</strong></td>
      <td><strong>charges</strong></td>
      <td><strong>Photo</strong></td>
      <td><strong>Timing</strong></td>
      <td><strong>Date</strong></td>
      <td><strong>Delete</strong></td>
    </th>

    <?php
    /**db file include**/
    include('db/dbconnect.php');
    $query='select * from joinus';
    $query_cont=mysqli_query($con,$query);
    $numrows=mysqli_num_rows($query_cont);
    $c=0;
    for($c=0;$c<$numrows;$c++)
    {
      $row=mysqli_fetch_assoc($query_cont);
      $name=$row['name'];
      $gender=$row['gender'];
      $Address=$row['Address'];
      $mno=$row['mno'];
      $email=$row['email'];
      $adhar=$row['adhar'];
      $ser=$row['ser'];
      $charge=$row['charge'];
      $photo=$row['photo'];
      $tim=$row['tim'];
      $dat=$row['dat'];
      $ID=$row['ID'];
     

      echo"<tr>

      <td></td>
      <td>$name</td>
      <td>$gender</td>
      <td>$Address</td>
      <td>$mno</td>
      <td>$email</td>
      <td>$adhar</td>
      <td>$ser</td>
      <td>$charge</td>
      <td>$photo</td>
      <td>$tim</td>
      <td>$dat</td>
      <td><a class='btn btn-danger btn-sm' href='deletejoiner.php?uid=$ID'>delete</a></td>
      </tr>";

      }
    ?>
    </table>








	

		
		<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
<?php

}
else
{
	header('location:../adminsignin/logout.php');
}
?>