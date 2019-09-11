<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>My Jobs</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../iconfonts/flaticon.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../assets/js/homepage.js"></script>
  
</head>

<style type="text/css">

  .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000000e3;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

  .sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}
  .sidenav a:hover{
  color: #f1f1f1;
}

  .sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

  .ui.button a:hover{
    background-color: red;
  }

  .navlink a{
  color: grey;
}
  .navlink a:hover{
  color: #4183c4;
}

.ui.relaxed.divided.list a{
  color: grey !important;
}
.ui.grid>.relaxed.row>.column, .ui.relaxed.grid>.column:not(.row), .ui.relaxed.grid>.row>.column {
    padding-left: .7rem;
    padding-right: .7rem;
}

button.ui.blue.basic.button:hover {
    background-color: #2185d0!important;
    color: white!important;
}

button.ui.red.basic.button:hover {
    background-color: red!important;
    color: white!important;
}

button.ui.positive.basic.button:hover {
    background-color: #21ba45!important;
    color: white!important;
}

.company_logo img{
  height: 69px;
  width: 83px;
  float: right;
  border: 1px solid #e1e1e1;
  padding: 2px;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(2.5); 
  transition: 0.5s;
  margin-right: 60px;
}
  @media only screen and (max-width: 800px) 
  {
    .ui.fixed.menu {
      display: none;
    }
    
  }

.job_card{
  color: black!important;
}

@media (max-width: 700px) 
  {
    .one.column.one.column.mobile.demo.row{
      margin: 0px 0px!important;
    }
    
  }

  a.card.job_card:hover{
    box-shadow: 0px 4px 10px 5px grey;
  }
</style>


<body id="home" style="background-color: #f4f9ff;">

  <!-- RESPONSIVE DESIGNS -->
  <!-- RESPONSIVE NAV -->
  <div class="resp_nav">
    <div class="ui three item menu borderless" style="margin-bottom: 18px; max-width: 100%;">
      <a class="item">
  <div style="font-size:20px;cursor:pointer" onclick="openNav()"><i class="bars icon"></i></div>
      </a>
    <div class="item">
    <h4>FunnelWorkForce</h4>
    </div>
    <div class="item">
    
    </div>
</div>
  </div>
  <!-- //RESPONSIVE NAV -->

  <!-- RESPONSIVE LIST JOB TYPE -->
  
  <!-- //RESPONSIVE LIST JOB TYPE -->

  <!-- Sidebar -->
  <div id="mySidenav" class="sidenav">
    <h4 style="color: white;">FunnelWorkForce</h4>
    <div class="ui category search" style="margin-bottom: 20px;">
  <div class="ui icon input" style="width: 350px;">
    <input class="prompt" type="text" placeholder="Search Freelancers">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="login.php">Login</a>
  <a href="signup.php">Sign up</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a>
  <button class="ui linkedin button">
  Post a Job
  </button>
  </a>
  </div>
  <!-- //Sidebar -->
  <!-- //RESPONSIVE DESIGNS -->  

  <!-- Navbar -->
  <div class="ui large fixed menu borderless" style="padding-left: 13%; padding-right: 13%; margin-bottom: 12%; padding-top: .1%; padding-bottom: .1%;">
    <div class="item">
      <a class="logo" href="index.php">
        <strong>FunnelWorkForce</strong>
      </a>
    </div>
  
  <div class="item navlink">
    <a href="my_jobs.php">My Jobs</a>
  </div>
  
  <div class="item navlink">
    <a href="freelancerslist.php">Freelancers</a>
  </div>

  <div class="item navlink">
    <a href="">Messages</a>
  </div>
  
  <div class="right menu">
    <div class="item">
  <div class="ui icon input">
      <input type="text" placeholder="Search...">
      <i class="search icon"></i>
    </div>
  </div>
  <div class="item navlink">
    <a href=""><i class="question icon" style="font-size: 20px; padding-right: 35px;"></i></a>
    <a href=""><i class="bell icon" style="font-size: 20px; padding-right: 35px;"></i></a>
    <a href=""><i class="user plus icon" style="font-size: 20px; padding-right: 35px;"></i></a>
  </div>
    <!-- Username Dropdown -->
    <div class="ui pointing dropdown link item navlink">
    <a href=""><i class="user circle icon" style="font-size: 28px; text-align: right;"></i></a>
    <div class="menu" style="font-size: 13px; width: auto; padding: auto;">
      <div class="item">
        <div class="ui buttons">
      <button class="ui positive button">Online</button>
      <button class="ui button">Offline</button>
        </div><br><br>
      </div>

      <div class="item">
       <img class="ui small image" src="../../assets/img/img_avatar.png">
        <span><strong>Sample Sample</strong></span>
        <p style="padding-left: 38px;">Freelancer</p>
      </div>
      <div class="item">
       <img class="ui small image" src="../../assets/img/img_avatar.png">
        <span><strong>Sample Sample</strong></span>
        <p style="padding-left: 38px;">Client</p>
      </div>
      <div class="item">
        <i class="cog icon" style="padding-right: 29px;"></i><span><b>Settings</b></span>
      </div>
      <div class="item">
        <i class="sign out alternate icon" style="padding-right: 29px;"></i><span><b>Log out</b></span>
      </div>
    </div>
  </div>
    
    <!-- //Username Dropdown -->
  </div>
  </div>
  <!-- //Navbar -->

   <div class="ui grid stackable relaxed page" style="margin-bottom: 20%;">
    
    <div class="one column one column mobile demo row" style="margin: 0px 100px;">
   <div class="sixteen wide column" style="margin-bottom: 20px;">
     <div class="ui three column aligned stackable grid" style="margin-bottom: 20px;">
      
  <div class="column">
          <div class="ui form" style="margin-top: 20px;">
       <input type="text" placeholder="Search Job">
     </div>
  </div>
   
  <div class="column" style="padding-top: 35px;">
    <a href="freelancerslist.php" class="ui blue button" style="width: 110px;">Search</a>
  </div>
</div>
   </div>

  <div class="sixteen wide column" style="margin-top: -20px; padding-left: -10px;">
  
  <h1>My Jobs</h1>



<!-- Jobs List -->
<div class="ui grid">
  <div class="sixteen wide column">
    <a href="job_detail.php" class="ui fluid card job_card">
  <div class="content">

    <div class="ui grid" style="padding: 12px;">
      <div class="eleven wide column">
        
    <h2>Sample Job</h2>
    <div class="description" style="color: grey;">
    Sample text Sample text Sample text Sample text
    </div>
      </div>
      <div class="one wide column">
       <div class="ui vertical divider"></div>
      </div>
      <div class="four wide column right aligned">
       <div>Freelancer Name</div>
       <div>Freelancer Name</div>
       <div>Freelancer Name</div>
       <div>Freelancer Name</div>
       <div>Freelancer Name</div>
      </div>
      </div>
 
  </div>
</a>
  </div>
  </div>

  <!-- //Jobs List -->

    </div>

    <!-- //Section 2 -->


  </div>
</div>


   <div class="ui inverted footer vertical segment center">
      <div class="ui stackable center aligned page grid">
        <div class="four column row">

          <div class="column">
            <h5 class="ui inverted header">Courses</h5>
            <div class="ui inverted link list">
              <a class="item">Registration</a>
              <a class="item">Course Calendar</a>
              <a class="item">Professors</a>
            </div>
          </div>
          <div class="column">
            <h5 class="ui inverted header">Library</h5>
            <div class="ui inverted link list">
              <a class="item">A-Z</a>
              <a class="item">Most Popular</a>
              <a class="item">Recently Changed</a>
            </div>
          </div>
          <div class="column">
            <h5 class="ui inverted header">Community</h5>
            <div class="ui inverted link list">
              <a class="item">BBS</a>
              <a class="item">Careers</a>
              <a class="item">Privacy Policy</a>
            </div>
          </div>

          <div class="column">
            <h5 class="ui inverted header"></h5>
            <addr>
              <a class="item" href="http://scripteden.com"><img src="" alt="Logo"
                  style="height:20px" /></a> <br />
              <a href="http://scripteden.com/downloads/bootstrap/">Bootstrap Templates</a> <br />
              <a href="http://scripteden.com/downloads/semantic-ui/">Semantic UI Templates</a>
            </addr>


          </div>
        </div>



      </div>
    </div>


    <script type="text/javascript" src="../assets/js/semantic.min.js"></script>
    <script type="text/javascript" src="../assets/js/myjs.js"></script>
    <script>
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar").style.top = "0";
        } else {
          document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
      }
    </script>

    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
    $(function () {
      $('.ui.card').popup();
    });
  </script>
     
</body>

</html>
