<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>FunnelWorkForce Login</title>
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

    .site {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}
  .site-content {
  flex: 1;
  }
  @media only screen and (max-width: 1500px) {
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

</style>


<body class="site" id="home" style="background-color: #f4f9ff;">

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
<main class="site-content">
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
  </div>
  <!-- //Navbar -->

  <!-- Login Form -->
<div class="ui middle aligned center aligned grid">
  <div class="column">
     <div class="ui fluid card" style="margin-top: 10px; margin-bottom: 70px; padding: 4% 13%;">
        <div class="content">
          <h2>Login to your account</h2>
        <form class="ui form">
    <div class="field">
    <label>Username or Email</label>
    <input type="text" name="first-name" placeholder="Username or Email">
    </div>
    <div class="field">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">
    </div>
    <button class="ui button primary" type="submit" style="width: 170px; margin: 12px 0px;">Login</button>
</form>
<div class="ui horizontal divider" style="text-transform: capitalize; font-size: 13px; color: grey; margin-top: 50px;">
    New to FunnelWorkForce?
    </div>
    <a href="signup.php">
    <button class="ui button" type="url" style="color: #2185d0; width: 170px;">Sign up</button>
    </a>
        </div>
      </div>
  </div>
</div>
  <!-- //Login Form -->


  


    <div class="ui inverted footer vertical segment center" style="position: absolute; bottom: 0; width: 100%;  margin-top: 1%;">
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
</main>
    <script type="text/javascript" src="assets/js/semantic.min.js"></script>
    <script type="text/javascript" src="assets/js/myjs.js"></script>
    
     
</body>

</html>