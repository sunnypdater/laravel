<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
      <script src="js/index.js"></script>
  
</head>


<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

<style>body { background: #000;}
video { 
position: fixed;
top: 50%;
left: 50%;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;

z-index: -100;
-moz-transform: translateX(-50%) translateY(-50%);
-ms-transform: translateX(-50%) translateY(-50%);
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg') no-repeat; background-size: cover;  -webkit-transition: 1s opacity; transition: 1s opacity; 
-webkit-filter: blur( 30px);
  -moz-filter: blur(30px);
  -o-filter: blur(30px);
  -ms-filter: blur(30px);
  filter: blur(30px);
}



            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
              font-family: 'Raleway', sans-serif;
                font-weight: 100;

                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media all and (max-device-width: 800px) {
  body { background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg") #000 no-repeat center center fixed; background-size: cover; }
  #bgvid, #polina button { display: none; }
  div{width:70%;} 
}</style>


<body>


  <video playsinline autoplay muted loop poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid">
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
<!-- <source src="https://cdn.shutterstock.com/shutterstock/videos/4640051/preview/stock-footage-vet-examining-pug-dog-at-animal-clinic.mp4" type="video/mp4"> -->
</video> 


<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!-- kidding -->



<!-- <span style="font-size:30px;cursor:pointer;margin-top:100px;" onclick="openNav()">&#9776; open</span> -->

<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            UI Components
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                            Typography and Icons
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
       

    <div class="content" style="margin-top: 20px">
                <div class="title m-b-md">
                    Staff Contect
                </div>
    </div>

    <?php  foreach ($Staffs as $Staff) { ?>
  <div class="w3-card-8 w3-dark-grey" style="width:50%;margin-left: auto;
    margin-right: auto;margin-top: 20px;">

    <div class="w3-container w3-center">
      <h3>Friend Request</h3>
      <img src="img/img_avatar3.png" alt="Avatar" style="width:30%">
      <h5><?php echo $Staff->username; ?></h5>

      <div class="w3-section">
        <button class="w3-btn w3-green">Accept</button>
        <button class="w3-btn w3-red">Decline</button>
      </div>
    </div>

  </div>

  <?php  
    }
  ?>
    

</body>
</html>
