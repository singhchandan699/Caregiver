<?php
  session_start();
  if(isset($_SESSION['uid']))
  {
    $uid = $_SESSION['uid'];
    /***include database connection**************/
    include('db/dbconnect.php');
    $user_query = mysqli_query($con, "SELECT * FROM registration WHERE id='$uid'");
    $user = mysqli_fetch_assoc($user_query);
    $User_Name=$user['User_Name'];
    $Numbe=$user['Numbe'];
    $Email=$user['Email'];
?>
<!DOCTYPE html>
<html>
<head>
<title>CareGiver's|Home</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body style="background-image:url('../images/show more.jpg');">
   <div class="topnav" id="myTopnav">
      <span class="navbar-brand" style="color: green;padding: 20px"> www.CareGiver.com </span>
      <div class="nav_right" style="float: right;">
        <a href="user.php">PROFILE</a>
        <a href="booking.php">BOOKING</a>
        <a href="about.php" class="active">ABOUT US</a>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
<div class="divider"></div>

 <h6 style="margin-left:93%"><li><button><a href="../signup/signup.html">LOGOUT</a></button></li></h6>
    <center><h2 style="color: white;">Welcome<br><br> <?php echo $Email; ?></h2></center>
    <br>
    <br>
    <center><h2 style="color: red">WELCOME TO CARE GIVER'S.<br><br>HOW CAN WE HELP YOU?</h2></center><br><br>

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

   
        <div class="carousel-inner">
            <div class="item active">
              <img src='../images/1.jpg' alt="car" style="width:100%;">
               <div class="carousel-caption">
                <h1 style="font-family: times new roman georgia; color: black">Smooth Travel And Good Conversation.</h1>
              </div>
            </div>

            <div class="item">
              <img src='../images/2.jpg' alt="interior" style="width:100%;">
              <div class="carousel-caption">
                <h1 style="font-family: times new roman georgia; color: brown">We Take Good Care Of Our Services.</h1>
              </div>
            </div>
        
            <div class="item">
              <img src='../images/3.jpg' alt="car" style="width:100%;">
              <div class="carousel-caption">
                <h1 style="font-family: times new roman georgia; color: red">Explore Over Many Cities</h1>
              </div>
            </div>
            <div id="text">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div><br>
  <div>
  <br>
  <h2 style="color: black"><center>INTRODUCTION</center></h2><br>
  <h4 style="color: white">A caregiver or carer is an unpaid or paid member of a person's social network who helps them with activities of daily living. Caregiving is most commonly used to address impairments related to old age, disability, a disease, or a mental disorder.<br><br>

Typical duties of a caregiver might include taking care of someone who has a chronic illness or disease; managing medications or talking to doctors and nurses on someone's behalf; helping to bathe or dress someone who is frail or disabled; or taking care of household chores, meals, or bills for someone who cannot do these things alone.<br><br>

With an increasingly aging population in all developed societies, the role of caregiver has been increasingly recognized as an important one, both functionally and economically. Many organizations which provide support for persons with disabilities have developed various forms of support for carers as well.</h4>
  <br>
  <h2 style="color: black"><center>BASIC PRINCIPLES</center></h2><br>
  <h4 style="color: white">A fundamental part of giving care is being a good communicator with the person getting care. Care is given with respect for the dignity of the person receiving care.The carer remains in contact with the primary health care provider, often a doctor or nurse, and helps the person receiving care make decisions about their health and matters affecting their daily life.<BR><br>

In the course of giving care, the caregiver is responsible for managing hygiene of themselves, the person receiving care, and the living environment.Hand washing for both caregivers and persons receiving care happen often. If the person receiving care is producing sharps waste from regular injections then the caregiver should manage that. Surfaces of the living area should be regularly cleaned and wiped and laundry managed.<br><br>

The caregiver manages organization of the person's agenda. Of special importance is helping the person meet medical appointments.Also routine daily living functions are scheduled, like managing hygiene tasks and keeping health care products available.</h4><br><br>

<h1 style="color: red"><center>Transparent Billing</center></h1>
  <br>
  <div style="margin-left: 70px">
    <img src="../images/tar1.jpg" alt="car" width="400" height="250" style="padding: 10px" >
    <img src="../images/tar3.jpg" alt="car" width="400" height="250" style="padding: 10px" >
    <img src="../images/tar2.jpg" alt="car" width="400" height="250" style="padding: 10px" >
    <h3 style="color: white; margin-left:10px">Pay With Paytm</h3>
    <h3 style="color: white; margin-left:10px">Card Payments</h3>
    <h3 style="color: white; margin-left:10px">Cash On After Service</h3>
    <br>
    <br>
    <h5 style="color: white; margin-left:10px">Whether you come to us as an existing client of a member firm, or by engaging our services directly, it is our highest priority to provide the coverage you need with seamless integration, resulting in high quality legal services at a reasonable cost.</h5>

    <h5 style="color: white; margin-left:10px">On a practical level, you can expect a joint proposal or statement of qualifications (when requested), one set of documents, efficient communications among and with your legal team, and one invoice, with consistent rates, for our services.</h5>

    <h5 style="color: white; margin-left:10px">Since our member firms all focus on employment law, without the high overhead of full-service practices, we are well positioned to offer competitive rates and alternative fee arrangements.</h5>
  </div>
  <br>


  <h1 style="color: red"><center>Reliable Service</center></h1>
  <br>
  <center><img src="../images/reb.png" alt="car" width="800" height="500" style="padding: 10px"></center>
  <br>
  <h5 style="color: white; margin-left:10px">(Reliable Services) Since the time of its inception, we have been striving to offer quality services that can set your website apart from others. We are in no hurry. We believe in understanding your vision for your business so that we can come up with strategies that best suits you. Our sole motto is customer satisfaction, and to achieve that we leave no stone un-turned. Tailor made solutions is what you can expect choosing our services.</h5>
  <h5 style="color: white; margin-left:10px">. Easy to navigate, user-friendly and attractively Website Design is the mantra to gain maximum customers. We respect your time and money. We serve businesses of all sorts for we believe in rendering the best within the price bracket that best befits your pocket. Reliable Services keeps you abreast about the project development via phone or mail. Creativity and innovation sets us apart from the rest. Your decision to hire the services offered by us is something that you will never regret. Let us be your companion in your accomplishment.</h5>
  <h5 style="color: white; margin-left:10px">Since the time of its inception, we have been striving to offer quality services that can set your website apart from others. We are in no hurry. We believe in understanding your vision for your business so that we can come up with strategies that best suits you. Our sole motto is customer satisfaction, and to achieve that we leave no stone un-turned. Tailor made solutions is what you can expect choosing our services.</h5>


  <h1 style="color: red"><center>On Time Service</center></h1>
  <br>
  <center><img src="../images/on1.png" alt="car" width="400" height="250" style="padding: 10px"></center>
  <br>
  <center><img src="../images/on2.jpg" alt="car" width="400" height="250" style="padding: 10px"></center>
  <br>
  <center><img src="../images/on3.png" alt="car" width="400" height="250" style="padding: 10px"></center>
  <br>
  <br>


  </div><br>
  <center><h2 style="color:black"><strong>Services in Cities:-</strong></h2></center>
  <br>
  <br>
  <h4><div style="color: white;" align="center">
    <style>
    li{
      display: inline;
    }
    </style>
    <li>|Bhopal|</li>
    <li>|Bangalore|</li>
    <li>|Chennai|</li>
    <li>|Hyderabad| </li>
    <li>|Pune|</li>
    <li>|Mumbai|</li>
    <li>|Delhi|</li>
    <li>|Kolkata|</li>
    <li>|Cochin|</li>
    <li>|Chandigarh|</li>
    <li>|Jaipur|</li>
    <li>|Jabalpur|</li>
    <li>|Indore|</li>
  </div></h4><br>


  <div>
  <br>
  <marquee scrollamount="8"
    direction="center"
    behavior="scroll">
    <h1 style="color: black">---THANK YOU FOR VISIT---</h1>
    </marquee>
  </div>
  <br>

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
  header("location:#");
}
?>
