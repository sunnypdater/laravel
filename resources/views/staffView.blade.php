<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<!-- <style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style> -->
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

div {
 /*font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;   
font-weight: 100; background: rgba(0,0,0,0.3); color: white; padding: 2rem; width: 33%; margin: 2rem; float: right; font-size: 1.2rem; */
/*background-size:cover;
    -webkit-filter: blur(13px);
    -moz-filter: blur(13px);
    -o-filter: blur(13px);
    -ms-filter: blur(13px);
    filter: blur(13px);*/
}



h1 { font-size: 3rem; text-transform: uppercase; margin-top: 0; letter-spacing: .3rem; }
a { display: inline-block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); 
padding: .5rem; -webkit-transition: .6s background; transition: .6s background; }
a:hover { background: rgba(0,0,0,0.9); }
.stopfade { opacity: .5; }
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  -webkit-transition: .3s background;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media all and (max-device-width: 800px) {
  body { background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg") #000 no-repeat center center fixed; background-size: cover; }
  #bgvid, #polina button { display: none; }
  div{width:70%;} 
}</style>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>


<body>


  <video playsinline autoplay muted loop poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid">
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video> 


<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!-- kidding -->



<!-- <span style="font-size:30px;cursor:pointer;margin-top:100px;" onclick="openNav()">&#9776; open</span> -->

<nav class="main-menu">
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
      
    <h1 style="margin-top: 20px;text-align: center;font-size: 50px;margin-bottom: 70px;">Staff Contect</h1>
                
                    
                
    

    <div style="margin-top: 20px;margin-left: 25%;
    margin-right: 25%;">
      <form action="/action_page.php" >
        <label for="fname">Name</label><br>

        <label for="lname">Resume</label><br>

        <label for="country">กรอกข้อความ</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

      
        <input type="submit" value="Submit">
      </form>
    </div>

    <script src="js/index.js"></script>

</body>
</html>
