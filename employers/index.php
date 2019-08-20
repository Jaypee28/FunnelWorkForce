<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>FunnelWorkForce-Employer Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../iconfonts/flaticon.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../homepage-design/semantic.js"></script>
  <script src="../assets/js/homepage.js"></script>
  
</head>

<style type="text/css">

  .categories_list{
    display: none;  
  }

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

.navlink a{
  color: grey;
}
.navlink a:hover{
  color: #4183c4;
}

.ui.icon.input.segment2 {
    color: #2185d0;
}

.ui.search .prompt.segment2 {
    border-radius: 500rem;
    border: 1.5px solid #2185d0;
    width: 250px;
}

.segment3{
  margin-top: 60px;
  background-color: white;
  padding-top: 30px;  
}

.segment3 a{
  font-size: 15px;
  text-transform: capitalize;
}

  .category_icon {
    font-size: 40px;
    padding-top: 8%;
  }

  .ui.fluid.card {
    box-shadow: 0px 0px 5px 0px grey;
    padding: 7%;
  }

.ui.secondary.pointing.menu .active.item {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #2185d0;
    font-weight: 700;
    color: #2185d0;
}

.ui.bottom.attached.tab.segment{
  border: transparent;
}

.ui.primary.basic.button:hover {
  box-shadow: 0px 0px 7px 0px !important;
}

.ui.selection.dropdown {
    border-radius: 20px;
}
  @media only screen and (max-width: 800px) {
    .categories_menu {
      display: none;
    }

    .ui.fixed.menu {
      display: none;
    }

    .resp_nav {
      display: block
    }

    .categories_grid{
    display: none;
    }

    .categories_list{
    display: block;
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
  <div class="categories_list">
   
  </div>
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
      <a class="logo" href="index.php">
        <strong>FunnelWorkForce</strong>
      </a>
    </div>
  <div class="ui pointing dropdown link item navlink">
    <a>Jobs</a>
    <div class="menu" style="font-size: 13px;">
      <a class="item" href="">My Jobs</a>
      <a class="item" href="">All Job Postings</a>
      <a class="item" href="">All Contracts</a>
     </div>
  </div>
  
    <div class="ui pointing dropdown link item navlink">
    <a href="freelancerslist.php">Freelancers</a>
    <div class="menu" style="font-size: 13px;">
      <div class="item">My Freelancers</div>
      <div class="item">Find Freelancers</div>
    </div>
  </div>
  <div class="item navlink">
    <a href="">Messages</a>
  </div>
  
  <div class="right menu">
    <div class="item">
  <a href="postajob"><button class="ui button primary">Post a Job</button></a>
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

    <div class="segment2">
    <div class="ui centered page grid" style=" margin-top: 28px;">
      <div class="sixteen wide column">
        <div class="ui one column stackable grid">
          <div class="column" style="margin: 13px 0px;">
            <h2>What are you hiring for?</h2>
      <div class="ui four column center aligned stackable grid">
        <div class="column">
          <div class="ui form" style="margin-top: 20px;">
       <input type="text" placeholder="Keywords">
     </div>
  </div>
   <div class="column" style="padding-top: 35px;">
    <div class="ui selection dropdown" style="border-radius: 0px!important;">
  <input type="hidden" name="gender">
  <i class="dropdown icon"></i>
  <div class="default text">Salary</div>
  <div class="menu">
    <div class="item" data-value="1">$15.00/hr</div>
    <div class="item" data-value="2">$15.00-$30.00/hr</div>
    <div class="item" data-value="3">More than $30.00/hr</div>
  </div>
</div>
  </div>
  <div class="column" style="padding-top: 35px;">
    <div class="ui selection dropdown" style="border-radius: 0px!important;">
  <input type="hidden" name="gender">
  <i class="dropdown icon"></i>
  <div class="default text">Duration</div>
  <div class="menu">
    <div class="item" data-value="1">1 to 3 Months</div>
    <div class="item" data-value="2">3 to 6 Months</div>
    <div class="item" data-value="3">More than 6 Months</div>
  </div>
</div>
  </div>
    <div class="column" style="padding-top: 35px;">
    <a href="freelancerslist.php" class="ui blue button" style="width: 170px;">Search</a>
  </div>
</div>
</div>
      </div>
    </div>
  </div>
</div>

  <!-- Categories Tab -->
  <div class="segment3">
    <div class="ui centered page grid">
      <div class="sixteen wide column">
<h5>Explore quality talent across multiple categories.</h5>
  <div class="ui four column center aligned stackable grid">
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="laptop icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Clickfunnels</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="paint brush icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Ads</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="pencil alternate icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Front-end Funnel Designs</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="chart bar icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Phone Automation</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="wrench icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Customer Service</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="smile outline icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Search Engine Optimization</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="chart line icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Lead generation</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
    <div class="column">
      <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="copy outline icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">E-mail Automation</div>
                <label style="text-transform: lowercase; font-size: 13px; color: grey;">5000+ hired last month</label>
              </div>
          </a>
    </div>
  </div>

      </div>
    </div>
 
</div>
  <!-- //Categories Tab -->

  <!-- Trusted by -->
  <div class="ui vertical feature segment borderless" style="margin-top: 80px;">
    <div class="ui centered page grid">
      <div class="sixteen wide column">
        <div class="ui five column center aligned stackable divided grid">
          <div class="column">
          <h4>Some text here</h4>
          </div>
          <div class="column">
          <h4>Some text here</h4>
          </div>
          <div class="column">
          <h4>Some text here</h4>
          </div>
          <div class="column">
          <h4>Some text here</h4>
          </div>
          <div class="column">
          <h4>Some text here</h4>
          </div>
      </div>
    </div>
  </div>
</div>
  <!-- //Trusted by -->

  <!-- Hire for any scope -->
  <div class="ui vertical segment">
    <div class="ui stackable center aligned page grid">
     <div class="four wide column" style="text-align: left; margin-top: 50px;">
    <h3>Hire for any scope of work</h3>
  </div>
  <div class="twelve wide column" style="margin-top: -20px;">
    <div class="ui segment" style="padding: 6% 5%;text-align: left;">
  <div class="ui three column very relaxed grid">
    <div class="column">
       <i class="minus icon" style="font-size: 23px; text-align: left;"></i><span><h5>Short-term tasks</h5></span>
      <p>Build a pool of diverse experts for one-off tasks</p>
    </div>
    <div class="column">
      <i class="minus icon" style="font-size: 23px; text-align: left;"></i><span><h5>Recurring projects</h5></span>
      <p>Have a go-to team with specialized skills</p>
    </div>
     <div class="column">
      <i class="minus icon" style="font-size: 23px; text-align: left;"></i><span><h5>Full-time contract work</h5></span>
      <p>Expand your staff with a dedicated team</p>
    </div>
  </div>
</div>
  </div>
    </div>
  </div>
  <!-- //Hire for any scope -->


  <!-- How it works -->
  <div class="ui vertical feature segment borderless">
    <div class="ui centered page grid" style="background-color: white;">
      <div class="sixteen wide column" style="padding: 5%;">
        <div style="padding-bottom: 7%; text-align: center; font-size: 35px;"><b>How it works</b></div>
        <div class="ui four column center aligned stackable divided grid">
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Post a Job</b></div>
          <div class="how_content">
            Tell us about your project. Upwork connects you with top talent around the world, or near you.
          </div>
          </div>
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Post a Job</b></div>
          <div class="how_content">
            Tell us about your project. Upwork connects you with top talent around the world, or near you.
          </div>
          </div>
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Post a Job</b></div>
          <div class="how_content">
            Tell us about your project. Upwork connects you with top talent around the world, or near you.
          </div>
          </div>
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Post a Job</b></div>
          <div class="how_content">
            Tell us about your project. Upwork connects you with top talent around the world, or near you.
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
    <!-- //How it works -->


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

    <script type="text/javascript" src="assets/js/semantic.min.js"></script>
    <script type="text/javascript" src="assets/js/myjs.js"></script>
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

  <script type="text/javascript">
    $('.menu .item')
  .tab()
;
  </script>
     
</body>

</html>
