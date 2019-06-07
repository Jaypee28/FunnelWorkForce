<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Freelancers</title>
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
  @media only screen and (max-width: 800px) 
  {
    .ui.fixed.menu {
      display: none;
    }
    
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

  <!-- CATEGORIES_LIST -->

  <!-- //CATEGORIES LIST -->

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
      <a class="logo" href="../index.php">
        <strong>FunnelWorkForce</strong>
      </a>
    </div>
  <div class="ui pointing dropdown link item">
    <span>Find Work</span>
    <div class="menu" style="font-size: 13px;">
      <a class="item" href="">Find Work</a>
      <a class="item" href="">Saved Jobs</a>
      <a class="item" href="">Proposals</a>
      <a class="item" href="">Profile</a>
      <a class="item" href="">My Stats</a>
      <a class="item" href="">Tests</a>
    </div>
  </div>
  
    <div class="ui pointing dropdown link item">
    <span>My Jobs</span>
    <div class="menu" style="font-size: 13px;">
      <div class="item">My Jobs</div>
      <div class="item">All Contracts</div>
      <div class="item">Work Diary</div>
    </div>
  </div>

  <div class="ui pointing dropdown link item">
    <span>Reports</span>
    <div class="menu" style="font-size: 13px;">
      <div class="item">Overview</div>
      <div class="item">Timesheet Details</div>
      <div class="item">Time Analyze</div>
      <div class="item">Earnings by Client</div>
      <div class="item">Lifetime Billings by Client</div>
      <div class="item">Weekly Timesheet</div>
      <div class="item">Timelogs</div>
      <div class="item">Connects History</div>
      <div class="item">Transaction History</div>
      <div class="item">Certificate of Earnings</div>
    </div>
  </div>
  <a class="item">
    Messages
  </a>
  
  <div class="right menu">
    <div class="item">
  <div class="ui icon input">
      <input type="text" placeholder="Search...">
      <i class="search icon"></i>
    </div>
  </div>
    <div class="item">
    <div class="ui pointing dropdown link item">
    <span>Username</span>
    <div class="menu" style="font-size: 13px;">
      <div class="item">
        <div class="ui buttons">
      <button class="ui positive button">Online</button>
      <button class="ui button">Offline</button>
        </div><br><br>
        <img class="ui avatar image" src="/images/wireframe/square-image.png">
        <span>Username</span>
      </div>
     
    </div>
  </div>
    </div>
  </div>
  </div>
  <!-- //Navbar -->

   <div class="ui inverted footer vertical segment center" style="position: absolute; bottom: 0; width: 100%;">
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