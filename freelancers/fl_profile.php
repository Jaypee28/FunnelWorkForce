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

.skill{
  background-color: #4183c4;
  height: 20px;
  width: auto;
  border-radius: 5px;
  display: inline-block;
  text-align: center;
  color: white;
  cursor: pointer;
  padding: 0px 10px;
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

.ui.grid>.relaxed.row>.column, .ui.relaxed.grid>.column:not(.row), .ui.relaxed.grid>.row>.column {
    padding-left: .7rem;
    padding-right: .7rem;
}

button.ui.blue.basic.button:hover {
    background-color: #2185d0!important;
    color: white!important;
}

i.pencil.alternate.icon {
    font-size: 15px;
}

i.upload.icon{
  font-size: 15px;
}

i.plus.icon {
  font-size: 15px;
}

.content a{
  font-size: 15px;
}

.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 25px;
    cursor: pointer;
}
i.dropdown.icon {
  display: none;
}

  @media only screen and (max-width: 800px) 
  {
    .ui.fixed.menu {
      display: none;
    }
    
  }
</style>


<body id="home" style="background-color: #f4f9ff;">

  <!-- MODALS-->
  <!-- Modal Edit s2 s1 -->
  <div class="ui modal horizontal flip eProfileSummary" style="width: 500px;">
  <i class="close icon"></i>
  <div class="header">
    Profile Summary
  </div>
    <div class="content">
      <form class="ui form">
  <div class="field">
    <input type="text" name="summary" placeholder="Enter your Summary">
  </div>
   <div class="submit_btn" style="float: right; padding: 20px 0px;">
    <div class="ui positive button">
      Save
    </div>
  </div>
</form>
    </div>
</div>
  <!-- //Modal Edit s2 s1 -->

   <!-- Modal Edit s2 s3 -->
  <div class="ui modal horizontal flip eSkills" style="width: 500px;">
  <i class="close icon"></i>
  <div class="header">
    Skills
  </div>
    <div class="content">
<form class="ui form">
<select name="skills" multiple="" class="ui fluid search dropdown">
<option value="">Skills</option>
<option value="angular">Angular</option>
<option value="css">CSS</option>
<option value="design">Graphic Design</option>
<option value="ember">Ember</option>
<option value="html">HTML</option>
<option value="ia">Information Architecture</option>
<option value="javascript">Javascript</option>
<option value="mech">Mechanical Engineering</option>
<option value="meteor">Meteor</option>
<option value="node">NodeJS</option>
<option value="plumbing">Plumbing</option>
<option value="python">Python</option>
<option value="rails">Rails</option>
<option value="react">React</option>
<option value="repair">Kitchen Repair</option>
<option value="ruby">Ruby</option>
<option value="ui">UI Design</option>
<option value="ux">User Experience</option>
</select>
<div class="submit_btn" style="float: right; padding: 20px 0px;">
    <div class="ui positive button">
      Save
    </div>
  </div>
</form>
    </div>
</div>
  <!-- //Modal Edit s2 s3 -->

    <!-- Modal Edit s2 s4 -->
  <div class="ui modal horizontal flip eJobPreference" style="width: 500px;">
  <i class="close icon"></i>
  <div class="header">
    Job Preference
  </div>
    <div class="scrolling content">
 <form class="ui form">
  <div class="field">
    <label>Industry</label>
    <input type="text" name="industry" placeholder="Industry">
  </div>
  <div class="field">
    <label>Function</label>
    <input type="text" name="function" placeholder="Function">
  </div>
  <div class="field">
    <label>Role</label>
    <input type="text" name="role" placeholder="Role">
  </div>
   <div class="field">
    <label>Job Type</label>
    <input type="text" name="jobtype" placeholder="Job Type">
  </div>
     <div class="field">
    <label>Expected Salary</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="salary">
  <i class="dropdown icon" style="display: block;"></i>
  <div class="default text">Salary</div>
  <div class="menu">
    <div class="item" data-value="1">$15.00/hr</div>
    <div class="item" data-value="2">$15.00-$30.00/hr</div>
    <div class="item" data-value="3">More than $30.00</div>
  </div>
</div>
  </div>
  <div class="field">
    <label>Project Duration</label>
    <div class="ui selection dropdown">
  <input type="hidden" name="duration">
  <i class="dropdown icon" style="display: block;"></i>
  <div class="default text">Duration</div>
  <div class="menu">
    <div class="item" data-value="1">1 to 3 Months</div>
    <div class="item" data-value="2">3 to 6 Months</div>
    <div class="item" data-value="3">More than 6 Months</div>
  </div>
</div>
  </div>
  <div class="field">
    <label>Preferred Location</label>
    <select class="ui search dropdown">
  <option value="">State</option>
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
</select>
  </div>
  <div class="submit_btn" style="float: right; padding: 5px 0px;">
    <div class="ui positive button">
      Save
    </div>
  </div>
</form>
    </div>
</div>
  <!-- //Modal Edit s2 s4 -->

    <!-- Modal Edit s2 s6 -->
  <div class="ui modal horizontal flip eEducation" style="width: 500px;">
  <i class="close icon"></i>
  <div class="header">
    Educational Details
  </div>
    <div class="content">
      <form class="ui form">
  <div class="field">
    <label>Degree</label>
    <input type="text" name="degree" placeholder="Degree">
  </div>
  <div class="field">
    <label>School</label>
    <input type="text" name="school" placeholder="School">
  </div>
   <div class="submit_btn" style="float: right; padding: 20px 0px;">
    <div class="ui positive button">
      Save
    </div>
  </div>
</form>
    </div>
</div>
  <!-- //Modal Edit s2 s6 -->
  
  <!-- Modal Edit s2 s8 -->
  <div class="ui modal horizontal flip ePersonalDetails" style="width: 500px;">
  <i class="close icon"></i>
  <div class="header">
    Personal Details
  </div>
    <div class="content">
      <form class="ui form">
  <div class="field">
    <label>Home Town</label>
    <input type="text" name="hometown" placeholder="Home Town">
  </div>
  <div class="field">
    <label>Permanent Address</label>
    <input type="text" name="paddress" placeholder="Permanent Address">
  </div>
  <div class="field">
    <label>Gender</label>
    <input type="text" name="gender" placeholder="Gender">
  </div>
   <div class="field">
    <label>Date of Birth</label>
    <input type="date" name="dofbirth" placeholder="Date of Birth">
  </div>
  <div class="field">
    <label>Nationality</label>
    <input type="text" name="nationality" placeholder="Nationality">
  </div>
  <div class="submit_btn" style="float: right; padding: 20px 0px;">
    <div class="ui positive button">
      Save
    </div>
  </div>
</form>
    </div>
</div>
  <!-- //Modal Edit s2 s8 -->

  <!-- //MODALS -->



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
  <a href="../login.php">Login</a>
  <a href="../signup.php">Sign up</a>
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
    <a>Find Work</a>
    <div class="menu" style="font-size: 13px;">
      <a class="item" href="">Find Work</a>
      <a class="item" href="">Saved Jobs</a>
      <a class="item" href="">Proposals</a>
      <a class="item" href="">Profile</a>
      <a class="item" href="">My Stats</a>
      <a class="item" href="">Tests</a>
    </div>
  </div>
  
    <div class="ui pointing dropdown link item navlink">
    <a>My Jobs</a>
    <div class="menu" style="font-size: 13px;">
      <div class="item">My Jobs</div>
      <div class="item">All Contracts</div>
      <div class="item">Work Diary</div>
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

   <div class="ui grid stackable relaxed page" style="margin-bottom: 20%;">
    
    <div class="one column one column mobile demo row">
   <div class="sixteen wide column" style="margin-bottom: 20px; margin-top: -10px;">
    <div style="font-size: 23px;"><b>My Profile</b><span style="float: right; font-size: 13px;">Last updated: <b>15 June 2019</b></span></div>
  </div>

      <!-- Section 1 -->
    <div class="five wide column" style="margin-top: -10px;">

    <!-- s1 s2 -->
     <div class="ui fluid card">
  <div class="content">
    <div class="ui list">
  <div class="item center aligned">
    <a style="float: right;"><i class="pencil alternate icon"></i></a>
    <img class="ui avatar image" src="../assets/img/img_avatar.png" style="height: 60px; width: 60px; margin-left: 25px;">
    <h3 class="header">Username</h3>
    <div class="description">Iloilo</div>

    <h4>Novice</h4>
    <div class="description" style="padding: 0px 25px;">
      <div class="ui list">
      <div class="item">09123456789<a style="float: right;">verify</a></div>
      <div class="item" style="padding: 10px 0px;">sample@gmail.com<a style="float: right;">verify</a></div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
  <!-- //s1 s2 -->

      <!-- s1 s3 -->
     <div class="ui fluid card">
  <div class="content">
    <div class="ui list">
    <h4>Manage Profiles</h4>
    <div class="item">
      <i class="check circle icon" style="float: right; color: green;">
      </i>
      <div>
        NOVICE Bachelor of Science in Information Technology
      </div>
      
    </div>
    </div>

  </div>
</div>
  <!-- //s1 s3 -->
    </div>
    <!-- //Section 1 -->

    <!-- Section 2 -->
    <div class="eleven wide column" style="margin-top: -10px; padding-left: -10px;">
  <div class="sixteen wide column">
    <div class="ui fluid card">
  <div class="content">
   <h3>NOVICE Bachelor of Science in Information Technology<a id="eProfileSummary"><i style="float: right;" class="pencil alternate icon"></i></a></h3>
  </div>
</div>

  <!-- s2 s2 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Resume<div class="image-upload" style="float: right;">
    <label for="file-input">
      <img src="https://goo.gl/pB9rpQ"/>
    </label>
    <input id="file-input" type="file"/>
</div></h3>
   <div class="description">
    Sample Text Sample Text
   </div>
  </div>
</div>
  <!-- //s2 s2 -->

  <!-- s2 s3 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Skills<a id="eSkills"><i style="float: right;" class="pencil alternate icon"></i></a></h3>
   <div class="description">
    <div class="skill">Sample Skill</div>
   </div>
  </div>
</div>
  <!-- //s2 s3 -->

  <!-- s2 s4 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Job Preference<a id="eJobPreference"><i style="float: right;" class="pencil alternate icon"></i></a></h3>
    <div class="ui grid">
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Industry:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Function:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Role:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Job Type:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Salary:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Project Duration:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Preferred Location:</b></div>
        <p>-</p>
      </div>
    </div>
  </div>
</div>
  <!-- //s2 s4 -->

  <!-- s2 s5 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Work Experience<a id="eExperience" style="float: right;"><i class="plus icon"></i>Add</a></h3>
   <div class="description">
      Sample Text Sample Text Sample Text
   </div>
  </div>
</div>
  <!-- //s2 s5 -->

  <!-- s2 s6 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Educational Details<a id="eEducation" style="float: right;"><i class="pencil alternate icon"></i></a></h3>
      <h4>Sample Course</h4>
      <div class="description">
        Sample School
      </div>
  </div>
</div>
  <!-- //s2 s6 -->

  <!-- s2 s7 -->
<div class="ui fluid card">
  <div class="content">
   <h3>Courses & Certification<a id="eCourse" style="float: right;"><i class="plus icon"></i>Add More</a></h3>
      <div class="description">
        Sample Course & Certification
      </div>
  </div>
</div>
  <!-- //s2 s7 -->

  <!-- s2 s8 -->
<div class="ui fluid card">
    <div class="content">
   <h3>Personal Details<a id="ePersonalDetails" style="float: right;"><i class="pencil alternate icon"></i></a></h3>
       <div class="ui grid">
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Home Town:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Permanent Address:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Gender:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Date of Birth:</b></div>
        <p>-</p>
      </div>
      <div class="eight wide column">
        <div style="font-size: 13px;"><b>Nationality:</b></div>
        <p>-</p>
      </div>
    </div>
  </div>
</div>
  <!-- //s2 s8 -->

  </div>





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

   <script>
    $('.ui.fluid.dropdown')
  .dropdown({
    maxSelections: 100
  })
;
  </script>

  <!-- Modal -->
    <script>
    $(function(){
  $("#eProfileSummary").click(function(){
    $(".eProfileSummary").modal('show');
  });
  $(".eProfileSummary").modal({
    closable: true
  });
});
  </script>

    <script>
    $(function(){
  $("#eSkills").click(function(){
    $(".eSkills").modal('show');
  });
  $(".eSkills").modal({
    closable: true
  });
});
  </script>

  <script>
    $(function(){
  $("#eJobPreference").click(function(){
    $(".eJobPreference").modal('show');
  });
  $(".eJobPreference").modal({
    closable: true
  });
});
  </script>

  <script>
    $(function(){
  $("#eEducation").click(function(){
    $(".eEducation").modal('show');
  });
  $(".eEducation").modal({
    closable: true
  });
});
  </script>

  <script>
    $(function(){
  $("#ePersonalDetails").click(function(){
    $(".ePersonalDetails").modal('show');
  });
  $(".ePersonalDetails").modal({
    closable: true
  });
});
  </script>


  <!-- //Modal -->
</body>

</html>