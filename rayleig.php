<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relic hunter</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header hidden="true">
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
        </ul>
    </header>
    <!-- End header -->
    <div id="lead">
        <div id="lead-content">
            <h1>Kshitij 2019</h1>
            <h2>Techno-management fest<br>Indian Institute of Technology kharagpur</h2>
            <a href="#" class="btn-rounded-white">LOGIN HERE</a>
            <a href="#" class="btn-rounded-white">SIGNUP HERE</a>
            <h1 class="spec">Relic Hunter</h1>
        </div>
        <!-- End #lead-content -->
        <div id="lead-overlay"></div>
        <div id="lead-down">
            <span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </span>
        </div>
        <!-- End #lead-down -->
    </div>
    <!-- End #lead -->
    <center>
    <div class="lower">
        <div class="question">
            <h3>Question Number : 1</h3>
   <?php 
  session_start();
   if(!isset($_SESSION['count'])){$_SESSION['count']=1;}
   $servername="localhost";
   $username="root";
   $password="";
   if(isset($_POST['name'])) {
     $que=$_POST['name'];
     $connec = new PDO("mysql:host=$servername;dbname=a_database", $username, $password);
     $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stm=$connec->prepare("SELECT * FROM Quizes WHERE id=:id");
     $stm->bindParam("id", $_SESSION['count'],PDO::PARAM_STR);
     $stm->execute();
     $rows=$stm->fetch();
     $ans=$rows['ans'];
     if($que==$ans){
       ++$_SESSION['count'];}
      }   
  
   $conn = new PDO("mysql:host=$servername;dbname=a_database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt=$conn->prepare("SELECT * FROM Quizes WHERE id=:id");
   $stmt->bindParam("id", $_SESSION['count'],PDO::PARAM_STR);
   $stmt->execute();
   echo $_SESSION['count'];
   $row=$stmt->fetch();
   echo "<p>".$row['que']."</p>";

       ?>
       <div class="submit">
       <form id="form" method="POST">
        <input type="text" name="name" placeholder="Your Answer" id="name">
        <button type="submit" name="counter" id="submit">Submit</button>
      </form>
      </div>
                
            </div>
        </div></center>
        <div class="info">
            <div class="timer">
                Since 00 Days 00 Hrs 00 Min 00 Sec
            </div>
            <div class="last">
                On 00-00-00-00
            </div>
            <div class="level">
                Level:1
            </div>
        </div>
        <div class="leaderboard">
            <h3>TOP PERFORMERS</h3>
            <div class="rows">
                <div class="name">
                    Anand Mani Tripathi
                </div>
                <div class="date">
                    0 Day: 00 Hrs: 00 Min: 00 Sec
                </div>
                <div class="stage">
                    Level : 0.0
                </div>
            </div>
            <div class="rows">
                <div class="name">
                    Anand Mani Tripathi
                </div>
                <div class="date">
                    0 Day: 00 Hrs: 00 Min: 00 Sec
                </div>
                <div class="stage">
                    Level : 0.0
                </div>
            </div>
            <div class="rows">
                <div class="name">
                    Anand Mani Tripathi
                </div>
                <div class="date">
                    0 Day: 00 Hrs: 00 Min: 00 Sec
                </div>
                <div class="stage">
                    Level : 0.0
                </div>
            </div>
            <div class="rows">
                <div class="name">
                    Anand Mani Tripathi
                </div>
                <div class="date">
                    0 Day: 00 Hrs: 00 Min: 00 Sec
                </div>
                <div class="stage">
                    Level : 0.0
                </div>
            </div>
            <div class="rows">
                <div class="name">
                    Anand Mani Tripathi
                </div>
                <div class="date">
                    0 Day: 00 Hrs: 00 Min: 00 Sec
                </div>
                <div class="stage">
                    Level : 0.0
                </div>
            </div>
        </div>
        <div class="protime">
            <div class="container">
                <h1>Progress</h1>
                <div class="left-content">
                    <p>Content 02</p>
                    <p>Content 04</p>
                </div>
                <div class="right-content">
                    <p>Content 01</p>
                    <p>Content 03</p>
                    <p>Content 05</p>
                </div>
            </div>
        </div>
        <div class="slides">
            
            <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 7</div>
                          <img src="img/s4.jpg" style="width:100%">
                          <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">2 / 7</div>
                          <img src="img/s5.jfif" style="width:100%">
                          <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">3 / 7</div>
                          <img src="img/s6.jpg" style="width:100%">
                          <div class="text">Caption Three</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">4 / 7</div>
                          <img src="img/s7.jpg" style="width:100%">
                          <div class="text">Caption Four</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">5 / 7</div>
                          <img src="img/s8.jpg" style="width:100%">
                          <div class="text">Caption Five</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">6 / 7</div>
                          <img src="img/s9.jpg" style="width:100%">
                          <div class="text">Caption Six</div>
                        </div>

                        <div class="mySlides fade">
                          <div class="numbertext">7 / 7</div>
                          <img src="img/s10.jpg" style="width:100%">
                          <div class="text">Caption Seven</div>
                        </div>
            </div>
            <br>
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span>
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>

            <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
  
            </script>
        </div>
    </div>
    <script type="text/javascript" src="myjs.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scripts.min.js"></script>
</body>

</html>