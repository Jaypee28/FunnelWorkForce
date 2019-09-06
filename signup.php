<!DOCTYPE html>
<html>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>FunnelWorkForce - Create an Account</title>
  <link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="homepage-design/semantic.js"></script>
  <script src="assets/js/homepage.js"></script>
  <script>
    $(function () {
      $('.ui.card').popup();
    });
  </script>
</head>

<style type="text/css">
  .ui.menu .item {
    color: rgb(0, 0, 0);
  }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 580px;
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

    .ui.inverted.footer.vertical.segment.center {
      position: relative!important;
    }
  }

  a.item:hover{
    color: #2185d0!important;
    font-weight: bold!important;
  }

  a.item.active{
    background-color: #2185d0!important;
    color: white!important;
  }

  @media only screen and (max-width: 570px) {
    .ui.top.attached.tabular.menu{
      padding-left: 0px!important;
    }
  }

</style>


<body id="home" style="background-color: #f4f9ff;">

  <!-- RESPONSIVE DESIGNS -->
  <!-- RESPONSIVE NAV -->
  <div class="resp_nav">
    <div class="ui three item menu borderless" style="margin-bottom: 18px; max-width: 100%;">
      <div class="item">
 
      </div>
    <div class="item">
    <h4>FunnelWorkForce</h4>
    </div>
    <div class="item">
    
    </div>
</div>
  </div>
  <!-- //RESPONSIVE NAV -->

  <!-- //RESPONSIVE DESIGNS -->  

  <!-- Navbar -->
  <div class="ui large fixed menu borderless" style="padding-left: 13%; padding-right: 13%; margin-bottom: 12%;">
    <div class="item">
      <a class="logo" href="index.php">
        <strong>FunnelWorkForce</strong>
      </a>
    </div>
    <a class="item" style="visibility: hidden;">
      <div class="ui category search">
        <div class="ui icon input">
          <input class="prompt" type="text" placeholder="Find Freelancers">
          <i class="search icon"></i>
        </div>
        <div class="results"></div>
      </div>
    </a>
    <div class="right menu">
      <div class="item">
        Already have an account?<a href="login.php">&nbsp Login</a>
      </div>
    </div>
  </div>
  <!-- //Navbar -->

  <!-- Signup Form -->
<div class="ui middle aligned center aligned grid" style="margin-bottom: 70px; padding: 4%;">
  <div class="column">
     <div class="ui fluid card" style="margin-top: 30px; margin-bottom: 100px; padding: 2% 7% 2% 7%;">
        <div class="content">
          <h2>Signup</h2>
          <hr>
          <div class="ui top attached tabular menu" style="border: none!important; padding-left: 80px;">
            <a class="item active" data-tab="first" style="border: none!important; font-size: 18px;">Freelancer</a>
            <a class="item" data-tab="second" style="border: none!important; font-size: 18px;">Employer</a>
          </div>

          <div class="ui bottom attached tab segment active" data-tab="first" style="border: none!important">
            <div class="ui form" style="padding-top: 30px; font-size: 16px;">
              <div class="two fields">
                <div class="field">
                  <label>First name</label>
                  <input type="text" placeholder="First Name">
                </div>
            <div class="field">
            <label>Last name</label>
            <input type="text" placeholder="Last Name">
            </div>
            </div>
          <div class="field">
          <label>Email</label>
          <input type="email" placeholder="Email Address">
          <button class="ui button primary" type="submit" style="width: 170px; margin: 25px 0px;">Get Started</button>
             </div>
           </div>
          </div>

          <div class="ui bottom attached tab segment" data-tab="second" style="border: none!important">
            <div class="ui form" style="padding-top: 30px; font-size: 16px;">
              <div class="two fields">
                <div class="field">
                  <label>First name</label>
                  <input type="text" placeholder="First Name">
                </div>
          <div class="field">
            <label>Last name</label>
            <input type="text" placeholder="Last Name">
            </div>
          </div>
          <div class="field">
          <label>Email Address</label>
          <input type="email" placeholder="Email Address">
          </div>
          <div class="field">
            <label>Company name</label>
            <input type="text" placeholder="Company Name">
            </div>
            <div class="field">
            <label>Company Location</label>
            <input type="text" placeholder="Company Location">
            </div>
            <div class="ui form" style="font-size: 16px;">
              <div class="field">
                <label>Company Description</label>
                <textarea rows="2"></textarea>
              </div>
            </div>
            <div class="field" style="margin-top: 15px;">
            <label>Company Email</label>
            <input type="email" placeholder="Company Email">
            </div>
            <div class="field" style="margin-top: 15px;">
            <label>Company Contact</label>
            <input type="text" placeholder="Company Contact">
            </div>
            <div class="field" style="margin-top: 15px;">
            <label>Password</label>
            <input type="password" placeholder="Password">
            </div>
            <button class="ui button primary" type="submit" style="width: 170px; margin: 25px 0px;">Get Started</button>
             </div>
           </div>
          </div>
         </div>
        </div>
      </div>
  </div>

  <!-- //Signup Form -->


  


    <div class="ui inverted footer vertical segment center" style="bottom: 0; width: 100%;">
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
    <script type="text/javascript">
      $('.menu .item')
        .tab();
    </script>
     
</body>

</html>
