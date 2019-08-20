<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>FunnelWorkForce</title>
  <link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
  <link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="homepage-design/semantic.js"></script>
  <script src="assets/js/homepage.js"></script>
  
</head>

<style type="text/css">
  .ui.menu .item {
    color: rgb(0, 0, 0);
  }


  .banner img {
    width: 100%;
    height: 100%;
  }

  .categories_menu {
    margin-top: 23px;
    margin-bottom: -1%;

  }

  .categories_menu a {
    font-size: 14px;
    color: #676767 !important;
  }

  .ui.top.banner.test.ad img {
    height: 100%;
  }

  .category_icon {
    font-size: 40px;
    padding-top: 8%;
  }

  .ui.fluid.card {
    box-shadow: 0px 0px 5px 0px grey;
    padding: 7%;
  }

  .minus.icon{
    color: #2185d0;
  }

  .pic_container img{
    border-radius: 20%;
    width: 50px;
    height: 50px;
  }

  .how_title{
    font-size: 18px;
    padding: 10px 0px;
  }

  .how_content{
    font-size: 14px;
  }

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

.right.menu a:hover{
  color: #d94b41;
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

    .banner {
      display: none;
    }

    .ui.top.banner.test.ad {
      display: none;
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
  </div>
  <!-- //Sidebar -->
  <!-- //RESPONSIVE DESIGNS -->  

  <!-- Navbar -->
  <div class="ui large fixed menu borderless" style="padding-left: 13%; padding-right: 13%; margin-bottom: 12%;">
    <div class="item">
      <a class="logo" href="index.php">
        <strong style="color: #d94b41;">FunnelWorkForce</strong>
      </a>
    </div>
    <a class="item">
      <div class="ui category search">
        <div class="ui icon input">
          <input class="prompt" type="text" placeholder="Find Freelancers">
          <i class="search icon"></i>
        </div>
        <div class="results"></div>
      </div>
    </a>
    <div class="right menu" style="padding-top: 1%; padding-bottom: 1%;">
      <div class="item">
        <a href="login.php">Login</a>
      </div>
      <div class="item">
        <a href="signup.php">Sign up</a>
      </div>
    </div>
  </div>
  <!-- //Navbar -->

  <!-- Bottom Navbar -->
  <div class="categories_menu">
    <div class="ui red eleven item menu borderless">
      <a class="item">Clickfunnels</a>
      <a class="item">Kartra</a>
      <a class="item">Builderall</a>
      <a class="item">Facebook Ads</a>
      <a class="item">Google Ads</a>
      <a class="item">Front-end Funnel Designs</a>
      <a class="item">Agencies</a>
      <a class="item">Copywriters</a>
      <a class="item">See All Categories</a>
    </div>
  </div>
  <!-- //Bottom Navbar -->

  <!-- Banner -->
  <div class="ui top banner test ad" data-text="" style="width: 100%; height: 400px;">
    <img src="assets/img/bannerfwf.png">
  </div>
  <!-- //Banner -->

  <!-- Categories -->
  <div class="categories_grid">
  <div class="ui vertical feature segment borderless">
    <div class="ui centered page grid">
      <div class="sixteen wide column">
        <h3 style="padding-top: 2%; padding-bottom: 1%;">Choose a Category</h3>
        <div class="ui four column center aligned stackable divided grid">
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="laptop icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Clickfunnels</div>
              </div>
            </a>
          </div>
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="paint brush icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Kartra</div>
              </div>
            </a>
          </div>
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="pencil alternate icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <h5>Builderall</h5>
              </div>
            </a>
          </div>
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="chart bar icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Facebook Ads</div>
              </div>
            </a>
          </div>
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="wrench icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Google Ads</div>
              </div>
            </a>
          </div>
          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="smile outline icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Front-end Funnel Designs</div>
              </div>
            </a>
          </div>

          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="chart line icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Agencies</div>
              </div>
            </a>
          </div>

          <div class="column">
            <a class="ui fluid card" style="color: black;">
              <div class="category_icon">
                <i class="measurement icon"></i>
              </div>
              <div class="content" style="font-size: 11px;">
                <div class="header">Copywriters</div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div style="margin-top: 10px; font-size: 16px;">
        <a href="">See all categories</a>
      </div>
    </div>
  </div>
</div>
  <!-- //Categories -->

  <!-- Trusted by -->
  <div class="ui vertical feature segment borderless">
    <div class="ui centered page grid" style="background-color: white;">
      <div class="sixteen wide column">
        <h3 style="padding-bottom: 5%; text-align: center;">Trusted by 100+ business</h3>
        <div class="ui five column center aligned stackable divided grid">
          <div class="column">
          <i class="steam icon" style="font-size: 70px;"></i>
          </div>
          <div class="column">
          <i class="steam icon" style="font-size: 70px;"></i>
          </div>
          <div class="column">
         <i class="steam icon" style="font-size: 70px;"></i>
          </div>
          <div class="column">
          <i class="steam icon" style="font-size: 70px;"></i>
          </div>
          <div class="column">
          <i class="steam icon" style="font-size: 70px;"></i>
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
      <i class="minus icon" style="font-size: 23px; text-align: left; color: #d94b41;"></i><span><h5>Recurring projects</h5></span>
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
        <div class="ui three column center aligned stackable divided grid">
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Create a Job Post</b></div>
          <div class="how_content">
           Tell what you need and we’ll do the heavy lifting for you to find the right fit.
          </div>
          </div>
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Select a Category</b></div>
          <div class="how_content">
           Do you need help with Funnel Designs Facebook ads, Marketing Automations or a combination of all three? 
          </div>
          </div>
          <div class="column">
          <div class="pic_container">
            <img src="assets/img/sample.jpg">
          </div>
          <div class="how_title"><b>Choose a Candidate</b></div>
          <div class="how_content">
           Funnelworkforce will then send you a list of candidates you can work with. All you have to do now is choose which one you’d like to work with the most.
           Then add an icon or something that matches the description.
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
     
</body>

</html>
