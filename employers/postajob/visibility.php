<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Post a Job - Visibility</title>
  <link rel="stylesheet" type="text/css" href="../../assets/css/homepage.css">

  <link rel="stylesheet" type="text/css" href="../../assets/css/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../../iconfonts/flaticon.css">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../../assets/js/homepage.js"></script>
  
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
  
.ui.vertical.menu.borderless {
    border: 0px transparent;
    box-shadow: 0px 0px 0px;
}

.ui.vertical.menu .active.item {
    -webkit-box-shadow:;
    box-shadow:  0px 0px 0px 1px grey;
    color: #4183c4;
}

.ui.selection.list .list>.item.active, .ui.selection.list>.item.active {
    background: rgba(88, 152, 255, 0.07);
    color: #4183c4;
    box-shadow: 0px 2px 5px 0px #cdcdcd;
}
  
.twelve.wide.column {
    box-shadow: 0px 0px 4px 0px grey;
}

.card{
  height: 180px;
}

.ui.cards a{
  color: grey;
}

.ui.cards a:hover{
  color: #4183c4;
}

.ui.cards i{
  font-size: 20px;
  margin-bottom: 7%;
}
.collapsible {
  color: #4183c4;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.content_collapsible {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.toggle:hover {
  background-color: #4183c4;
}

.toggle{
  background-color: grey;
  height: 20px;
  width: 70px;
  border-radius: 5px;
  display: inline-block;
  text-align: center;
  color: white;
  cursor: pointer;
}

.toggle.check{
  background-color: #4183c4;
  height: 20px;
  width: 70px;
  border-radius: 5px;
  display: inline-block;
  text-align: center;
  color: white;
  cursor: pointer;
}

.modal_body{
  padding: 3%;
}

.content.active{
  color: #4183c4;
}

.description{
  color: grey;
}

.card:hover{
  box-shadow: 0px 0px 10px 0px grey !important;
}
button.ui.icon.button.active {
    color: #4183c4  ;
}

.navlink a{
  color: grey;
}
.navlink a:hover{
  color: #4183c4;
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

  <!-- MODALS -->
  <!-- More than one freelancers -->
    <div class="ui mini modal">
      <i class="close icon"></i>
  <div class="header">Number of freelancers</div>
  <div class="content">
    <div class="ui form">
  <div class="field">
    <input type="text" placeholder="Input number of freelancers">
  </div>
  <div class="action" style="padding-bottom: 7%;">

    <button type="submit" class="positive ui button" style="float: right;">Done</button>
  </div>
</div>
  </div>
 
</div>
<!-- //More than one freelancers -->
  <!-- //MODALS -->

 <!-- Navbar -->
  <div class="ui large fixed menu borderless" style="padding-left: 13%; padding-right: 13%; margin-bottom: 12%; padding-top: .1%; padding-bottom: .1%;">
    <div class="item">
      <a class="logo" href="../index.php">
        <strong>FunnelWorkForce</strong>
      </a>
    </div>
  <div class="ui pointing dropdown link item navlink">
    <a>Jobs</a>
    <div class="menu" style="font-size: 13px;">
      <a class="item" href="">My Jobs</a>
      <a class="item" href="">All Job Postings</a>
      <a class="item" href="">All Contracts</a>
      <a class="item" href="">Post a Job</a>
    </div>
  </div>
  
    <div class="ui pointing dropdown link item navlink">
    <a>Freelancers</a>
    <div class="menu" style="font-size: 13px;">
      <div class="item">My Freelancers</div>
      <div class="item">Find Freelancers</div>
      <div class="item">Work Diary</div>
      <div class="item">Bring Your Own Freelancer</div>
    </div>
  </div>

  <div class="ui pointing dropdown link item navlink">
    <a href="">Reports</a>
    <div class="menu" style="font-size: 13px;">
      <div class="item">Weekly Summary</div>
      <div class="item">Budgets</div>
      <div class="item">Transactions</div>
      <div class="item">Timesheet</div>
      <div class="item">Time by Freelancer</div>
      <div class="item">Time by Activity</div>
      <div class="item">Work Diary</div>
      <div class="item">Custom Export</div>
    </div>
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


  <!-- Vertical Menu -->
  <div class="ui grid stackable relaxed page" style="margin-bottom: 20%;">
    
    <div class="one column one column mobile demo row">
    <div class="four wide column" style="margin-top: -10px;">
    <div class="ui middle aligned selection list">
  <div class="item" style="margin: 10px 0px;">
    <a href="index.php" style="color: grey;">
    <div class="content">
      <div style="padding: 3% 0px;">
        <i class="pencil alternate icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Title</b>
        <i class="check circle icon" style="float: right; padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item" style="margin: 10px 0px;">
    <a href="description.php" style="color: grey;">
    <div class="content">
      <div style="padding: 3% 0px;">
        <i class="edit alternate icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Description</b>
        <i class="check circle icon" style="float: right;  padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item" style="margin: 10px 0px;">
    <a href="details.php" style="color: grey">
    <div class="content">
      <div style="padding: 3% 0px;">
         <i class="clipboard list icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Details</b>
        <i class="check circle icon" style="float: right;  padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item" style="margin: 10px 0px;">
    <a href="expertise.php" style="color: grey;">
    <div class="content">
      <div style="padding: 3% 0px;">
        <i class="star icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Expertise</b>
        <i class="check circle icon" style="float: right;  padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item active" style="margin: 10px 0px;">
    <a href="visibility.php">
    <div class="content">
      <div style="padding: 3% 0px;">
         <i class="circle outline icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Visibility</b>
        <i class="check circle icon" style="float: right;  padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item" style="margin: 10px 0px;">
    <a href="budget.php" style="color: grey;">
    <div class="content">
      <div style="padding: 3% 0px;">
         <i class="dollar sign icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Budget</b>
        <i class="check circle icon" style="float: right;  padding: 1%;"></i>
      </div>
    </div>
  </a>
  </div>
  <div class="item" style="margin: 10px 0px;">
    <a href="review.php" style="color: grey;">
    <div class="content">
      <div style="padding: 3% 0px;">
         <i class="check icon" style="margin-right: 18px; padding: 1%;"></i>
        <b>Review</b>
      </div>
    </div>
  </a>
  </div>
</div>
</div>
  <!-- //Vertical Menu -->

    <div class="twelve wide column" style="background-color: white; margin-bottom: auto; padding-bottom: 5%;">
  <div class="card_content" style="margin-top: 30px;">
<div><h2 class="ui header">Visibility</h2>Step 5 of 7</div>
<div class="ui section divider"></div>
<h5 class="ui header">Who can see your job?</h5>
<div class="ui three column grid">
  <div class="row">
    <div class="column">
      
      <div class="ui cards">
      <div class="card" style="box-shadow: 0px 0px 5px 0px grey; padding: 6%;">
        <a href="">
    <div class="content active" style="padding: 10% 0%; text-align: center;">
      <div class="header"><i class="users icon"></i><p><b>Anyone</b></p></div>
      <div class="description">
        Some text here Some text here Some text here
      </div>
    </div>
  </a>

  </div>

</div>

    </div>
    <div class="column">
      <a href="">
      <div class="ui cards">
      <div class="card" style="box-shadow: 0px 0px 5px 0px grey; padding: 6%;">
        <a href="">
    <div class="content" style="padding: 10% 0%; text-align: center;">
      <div class="header"><i class="certificate icon"></i><p><b>Only FunnelWorkForce freelancers</b></p></div>
      <div class="description">
        Some text here
      </div>
    </div>
  </a>
  </div>
</div>
</a>
    </div>
    <div class="column">
      <a href="">
      <div class="ui cards">
      <div class="card" style="box-shadow: 0px 0px 5px 0px grey; padding: 6%;">
        <a href="">
    <div class="content" style="padding: 10% 0%; text-align: center;">
      <div class="header"><i class="lock  icon"></i><p><b>Invite only</b></p></div>
      <div class="description">
        Some text here
      </div>
    </div>
  </a>
  </div>
</div>
</a>
    </div>


  </div>
</div>

<h5 class="ui header">How many freelancers do you need for this job?</h5>
<div class="ui one column grid">
  <div class="row">
    <div class="column">
<button class="ui icon button active" type="submit" style="box-shadow: 0px 0px 5px 0px grey; background-color: white;">
  Only one freelancers
</button>
 <button class="ui icon button" type="submit" id="more-freelancers" style="box-shadow: 0px 0px 8px 0px grey; background-color: white;">
  More than one freelancers
</button>
    </div>
  </div>
</div>
</div>
  </div>


  <div class="four wide column">
  </div>

 <div class="twelve wide column" style="margin-top: 20px; background-color: white;">
    <div class="card_content" style="margin-top: 30px;">
    <h4 class="ui header">Qualifications <span style="color: grey">(Optional)</span></h4>
    <p>Specify the qualifications you're looking for in a successful proposal.</p>
    <a class="collapsible"><i class="plus icon"></i>Add</a>
<div class="content_collapsible" style="height: 3000px; margin-bottom: 15px;">
  <p style="margin-top: 10px;">Freelancers may still apply if they do not meet your preferences, but they will be clearly notified that they are at a disadvantage.</p>
  <div class="ui two column grid">
  <div class="row">
    <div class="column">
      <h5>Freelancer Type</h5>
      <div class="ui selection dropdown fluid">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">No Preference</div>
    <div class="item" data-value="1">Independent</div>
    <div class="item" data-value="0">Agency</div>
  </div>
</div>
    </div>
    <div class="column">
      <h5>Hours Billed on FunnelWorkForce</h5>
      <div class="ui selection dropdown fluid">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">Any amount</div>
    <div class="item" data-value="1">At least 1 hour</div>
    <div class="item" data-value="0">At least 100 hour</div>
    <div class="item" data-value="0">At least 500 hour</div>
  </div>
</div>
    </div>



</div>
</div>

<div class="ui two column grid">
  <div class="row">
    <div class="column">
      <h5>Job Success Score</h5>
      <div class="ui selection dropdown fluid">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">Any job success</div>
    <div class="item" data-value="1">90% job success & up</div>
    <div class="item" data-value="0">80% job success & up</div>
  </div>
</div>
    </div>
    <div class="column">
      <h5>Rising Talent</h5>
      <div class="ui selection dropdown fluid disabled">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">Any amount</div>
    <div class="item" data-value="1">At least 1 hour</div>
    <div class="item" data-value="0">At least 100 hour</div>
    <div class="item" data-value="0">At least 500 hour</div>
  </div>
</div>
    </div>



</div>
</div>

<div class="ui two column grid">
  <div class="row">
    <div class="column">
      <h5>Location</h5>
      <div class="ui selection dropdown fluid">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">Any location</div>
    <div class="item" data-value="1">Africa</div>
    <div class="item" data-value="0">Americas</div>
    <div class="item" data-value="0">Antarctica</div>
    <div class="item" data-value="0">Asia</div>
    <div class="item" data-value="0">Europe</div>
    <div class="item" data-value="0">Oceania</div>
  </div>
</div>
    </div>
    <div class="column">
      <h5>Rising Talent</h5>
      <div class="ui selection dropdown fluid disabled">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">Any amount</div>
    <div class="item" data-value="1">At least 1 hour</div>
    <div class="item" data-value="0">At least 100 hour</div>
    <div class="item" data-value="0">At least 500 hour</div>
  </div>
</div>
    </div>



</div>
</div>

<div class="ui two column grid" style="padding-bottom: 180px;">
  <div class="row">
    <div class="column">
      <h5>Group</h5>
      <div class="ui selection dropdown fluid">
  <input type="hidden" name="freelancertype">
  <i class="dropdown icon"></i>
  <div class="default text"></div>
  <div class="menu">
    <div class="item" data-value="2">No preference</div>
    <div class="item" data-value="1">Sample</div>
    <div class="item" data-value="0">Sample</div>
    <div class="item" data-value="0">Sample</div>
    <div class="item" data-value="1">Sample</div>
    <div class="item" data-value="0">Sample</div>
    <div class="item" data-value="0">Sample</div>
  </div>
</div>
    </div>



</div>
</div>
</div>

<div class="ui section divider"></div>
<div class="back_next" style="padding-bottom: 30px;">
<button class="ui primary basic button" style="width: 100px;">
  Back
</button>
<button class="ui primary button" style="width: 100px;">
  Next
</button>
</div>
</div>
</div>
  
</div>
</div>
  

  <!-- Footer -->
   <div class="ui inverted footer vertical segment center" style="position: static; bottom: 0; width: 100%;">
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
  <!-- //Footer -->
</body>

    <script type="text/javascript" src="../../assets/js/semantic.min.js"></script>
    <script type="text/javascript" src="../../assets/js/myjs.js"></script>
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

  <!-- Mobile Sidenav -->
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- //Mobile Sidenav -->


<!-- More freelancers -->
<script type="text/javascript">
  $(function(){
  $("#more-freelancers").click(function(){
    $('.mini.modal')
     .modal('setting', 'closable', false)
     .modal('show')
    ;
  });
});
</script>
<!-- //More freelancers -->

<!-- Collapsible -->
  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content_collapsible = this.nextElementSibling;
    if (content_collapsible.style.maxHeight){
      content_collapsible.style.maxHeight = null;
    } else {
      content_collapsible.style.maxHeight = content_collapsible.scrollHeight + "px";
    } 
  });
}
</script>
<!-- //Collapsible -->
</body>

</html>