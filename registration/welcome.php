<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TeamChat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Team-CHAT.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>

<?php
// Initialize the session
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Team-CHAT.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p> -->
</body>

<!-- 
    file name: index.html
    author: Yanxin Wang
    date: OCT 27, 2022
    description:
        Team Chat application for COIS 3850H project   
 -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxx Html start xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<!DOCTYPE html>
<!-- 
    file name: index.html
    author: Yanxin Wang
    date: OCT 27, 2022
    description:
        Team Chat application for COIS 3850H project   
 -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxx Html start xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Teamchat</title>
        <link rel="stylesheet" href="styles/index.css">
        <script src="js/index.js" defer></script>
    </head>
    
  
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <title>TeamChat</title>
              <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
              <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
              <style>
              body{
                background: rgba(236, 232, 232, 0.8);
                font-family: 'Varela Round', sans-serif;
              }
              .form-inline {
                display: inline-block;
              }
              .navbar-header.col {
                padding: 0 !important;
              } 
              nav{
                
                position: fixed;
                top: 0;
              }
              .navbar {     
                background: rgba(230, 180, 19, 0.986);
                padding-left: 16px;
                padding-right: 16px;
                border-bottom: 1px solid #534a4a;
                box-shadow: 0 0 4px rgba(0,0,0,.1);
              }
              .nav-link {
                margin: 0 5px;
              }
              .nav-link img {
                border-radius: 50%;
                width: 36px;
                height: 36px;
                margin: -8px 0;
                float: left;
                margin-right: 10px;
              }
              .navbar .navbar-brand {
                color: #555;
                padding-left: 0;
                font-size: 20px;
                padding-right: 50px;
                font-family: 'Raleway', sans-serif;
              }
              .navbar .navbar-brand b {
                font-weight: bold;
                color: #eb5844;
              }
              .navbar .navbar-nav a:hover, .navbar .navbar-nav a:focus {
                color: #f08373 !important;
              }
              .navbar .navbar-nav a.active, .navbar .navbar-nav a.active:hover {
                color: #eb5844 !important;
                background: transparent !important;
              }
              .search-box {
                position: relative;
              } 
              .search-box input.form-control {      
                padding-right: 35px;
                border-radius: 0;
                padding-left: 0;
                border-width: 0 0 1px 0;
                box-shadow: none;
              }
              .search-box input.form-control:focus {        
                border-color: #f08373;      
              }
              .search-box .input-group-text {
                min-width: 35px;
                border: none;
                background: transparent;
                position: absolute;
                right: 0;
                z-index: 9;
                padding: 7px 0 7px 7px;
                height: 100%;
              }
              .search-box i {
                color: #a0a5b1;
                font-size: 19px;
              }
              .navbar .nav-item i {
                font-size: 18px;
              }
              .navbar .dropdown-item i {
                font-size: 16px;
                min-width: 22px;
              }
              .navbar .nav-item.show > a {
                background: none !important;
              }
              .navbar .dropdown-menu {
                border-radius: 1px;
                border-color: #e5e5e5;
                box-shadow: 0 2px 8px rgba(0,0,0,.05);
              }
              .navbar .dropdown-menu a {
                color: #777;
                padding: 8px 20px;
                line-height: normal;
                font-size: 15px;
              }
              .navbar .navbar-form {
                margin-right: 0;
                margin-left: 0;
                border: 0;
              }
              @media (min-width: 992px){
                .form-inline .input-group {
                  width: 250px;
                  margin-right: 30px;
                }
              }
              @media (max-width: 991px){
                .form-inline {
                  display: block;
                  margin-bottom: 10px;
                  margin-top: 0;
                }
                .input-group {
                  width: 100%;
                }
              }
              </style>
              </head> 
              <body>
              <nav class="navbar navbar-expand-lg navbar-light">
                <a href="welcome.php" class="navbar-brand mx-auto">
                  <img src="Logo.svg" alt="">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                  <div class="navbar-nav">
                    <a href="welcome.php" class="nav-item nav-link">HOME</a>
                     <a href="#" class="nav-item nav-link">    </a>
                    
                    <a href="#" class="nav-item nav-link ">     </a>
                    <a href="#" class="nav-item nav-link">    </a>
                    

                     
                    
                    <a href="http://localhost/demo/messenger/index.php" class="nav-item nav-link ">MESSENGER</a>
                    <a href="#" class="nav-item nav-link ">     </a>
                    <a href="#" class="nav-item nav-link">    </a>
                    <a href="#" class="nav-item nav-link ">     </a>
                    

                     
                        
                      </div>
                  <div class="navbar-nav ml-auto">
                    <div class="navbar-form-wrapper">
                      <form class="navbar-form form-inline" name="frmSearch" method="post" action="http://localhost/demo/messenger/searchengine.php" >
                        <div class="input-group search-box">                                
                          <input type="text" id="search" class="demoInputBox" value="<?php $with_any_one_of; ?>"  placeholder="Press Enter...">
                          
                          <?php
  $conn = mysqli_connect("localhost", "root", "", "phplogin");  
  $with_any_one_of = "";
  $with_the_exact_of = "";
  $without = "";
  $starts_with = "";
  $search_in = "";
  $advance_search_submit = "";
  
  $queryCondition = "";
  if(!empty($_POST["search"])) {
    $advance_search_submit = $_POST["advance_search_submit"];
    foreach($_POST["search"] as $k=>$v){
      if(!empty($v)) {

        $queryCases = array("with_any_one_of","with_the_exact_of","without","starts_with");
        if(in_array($k,$queryCases)) {
          if(!empty($queryCondition)) {
            $queryCondition .= " AND ";
          } else {
            $queryCondition .= " WHERE ";
          }
        }
        switch($k) {
          case "with_any_one_of":
            $with_any_one_of = $v;
            $wordsAry = explode(" ", $v);
            $wordsCount = count($wordsAry);
            for($i=0;$i<$wordsCount;$i++) {
              if(!empty($_POST["search"]["search_in"])) {
                $queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
              } else {
                $queryCondition .= "username LIKE '" . $wordsAry[$i] . "%' OR email LIKE '" . $wordsAry[$i] . "%'";
              }
              if($i!=$wordsCount-1) {
                $queryCondition .= " OR ";
              }
            }
            break;
          case "with_the_exact_of":
            $with_the_exact_of = $v;
            if(!empty($_POST["search"]["search_in"])) {
              $queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $v . "%'";
            } else {
              $queryCondition .= "email LIKE '%" . $v . "%' OR username LIKE '%" . $v . "%'";
            }
            break;
          case "without":
            $without = $v;
            if(!empty($_POST["search"]["search_in"])) {
              $queryCondition .= $_POST["search"]["search_in"] . " NOT LIKE '%" . $v . "%'";
            } else {
              $queryCondition .= "username NOT LIKE '%" . $v . "%' AND email NOT LIKE '%" . $v . "%'";
            }
            break;
          case "starts_with":
            $starts_with = $v;
            if(!empty($_POST["search"]["search_in"])) {
              $queryCondition .= $_POST["search"]["search_in"] . " LIKE '" . $v . "%'";
            } else {
              $queryCondition .= "email LIKE '" . $v . "%' OR username LIKE '" . $v . "%'";
            }
            break;
          case "search_in":
            $search_in = $_POST["search"]["search_in"];
            break;
        }
      }
    }
  }
  $orderby = " ORDER BY id desc"; 
  $sql = "SELECT * FROM accounts " . $queryCondition;
  $result = mysqli_query($conn,$sql);
  
?>
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons">&#xE8B6;</i>
                            </span>
                          </div>
                        </div>
                              </form>
                          </div>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="nav-item nav-link"><i class="fa fa-google-plus"></i></a>
             
                      </div>        
                </div>
              </nav>

              <div>
                  <button onclick="topFunction()" id="myBtn" title=" ">Back to Top</button>
                  <script>
                    //Get the button:
                      mybutton = document.getElementById("myBtn");

                      // When the user scrolls down 20px from the top of the document, show the button
                      window.onscroll = function() {scrollFunction()};

                      function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                          mybutton.style.display = "block";
                        } else {
                          mybutton.style.display = "none";
                        }
                      }

                      // When the user clicks on the button, scroll to the top of the document
                      function topFunction() {
                        document.body.scrollTop = 0; // For Safari
                        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                      }
                      
                      
                  </script>
              </div>
                            <!-- iframed message-->

                            <section id="message">
                <div id="message_modal_background">

                  <!-- Modal content -->
                  <div id="message_modal_content">
                      <iframe src="http://localhost/demo/messenger/index.php" frameborder="0"></iframe>
                  </div>
                  
                </div>
              </section>
              </body>

            
            <!--or open a new page
            <a href="html/login.html">Login/Sign Up</a>
            -->
        </div>
    </header> 

    



    <!-- section starts-->
    <!--login/signup-->
   <!--  <section id="login_sign_up">
        <div id="login_sign_up_modal_background">

            <!-- Modal content -->
           <!--  <div id="login_sign_up_modal_content">
                <span class="modal_close">&times;</span>
                <iframe src="html/register.html" frameborder="0"></iframe>
            </div>
          
        </div>
    </section> --> 

    <!-- message -->
  <!--   <section id="message">
        <div id="message_btn">
            <button type="button"><img src="img/Message.svg" alt=""><br>Message</button>
        </div>
        <div id="message_modal_background">

            <!-- Modal content -->
           <!--  <div id="message_modal_content">
                <div id="message_modal_title">
                    <p>Message</p>
                    <span class="modal_close2">&times;</span>
                </div>
                <iframe src="html/message.html" frameborder="0"></iframe>
            </div>
            
        </div>
    </section> -->
    
    <!-- -->
    <section id="s2">
       
      <style>
        html {
          font-size: 20px;
          line-height: 1.6;
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }
      #s2{
        background-color: white;
      }
        main {
          grid-template-columns: 1fr 1fr 1fr;
          grid-gap: 1rem;
          padding: 0.5vw;
            margin-left: 2vw;
  margin-right: 2vw;
  font-size: 10vw;
  color: #d32f2f;
         
          text-align: center;
          grid-template-rows: auto;

        }
        main figure {
          font-size: 1.2vw;
          font-size: 1.5vw;
          background-color: white;


        }
        main figcaption {
          font-size: 1rem;
          font-family: inherit;
          color: gray;
        }
        main img {
          width: 500px;
          height: auto;
          max-width: 500px;
          padding: 1vw;
          font-size: 1.2vw;
          position: relative;
          top: 0.5vw;
          position: relative;
          bottom: 2vw;
          font-size: 1.5vw;
          margin-right: 1vw;
          background-color: gray;
          color: gray;

        }

        body{
  
}
.media-object{
  width: 3.5vw;
  height: 3.5vw;
}
.media{
  padding: 0.5vw;
}
.media-body{
  padding-left: 1vw;
  font-size: 1.2vw;
  position: relative;
  top: 0.5vw;
}
.fa-ellipsis-h{
  position: relative;
  bottom: 2vw;
  font-size: 1.5vw;
  margin-right: 1vw;
}
.panel-body{
  padding: 1vw;
}

/*
#description_box */
#description{
  display: flex;
  flex-wrap: nowrap;
  flex-direction: column;
  padding: 1em;

}
.iconsec{
  justify-content: space-between;
  font-size: 1.2vw;
  padding: 0.5em;
}

.caption{
  padding-left: 0.5vw;
}
.read{
  padding-left: 0.5vw;
  cursor: pointer;
  color: grey;
}
/*button part*/

#myBtn {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Fixed/sticky position */
    bottom: 20px;
    /* Place the button at the bottom of the page */
    right: 30px;
    /* Place the button 30px from the right */
    z-index: 99;
    /* Make sure it does not overlap */
    border: none;
    /* Remove borders */
    outline: none;
    /* Remove outline */
    background-color: red;
    /* Set a background color */
    color: white;
    /* Text color */
    cursor: pointer;
    /* Add a mouse pointer on hover */
    padding: 15px;
    /* Some padding */
    border-radius: 10px;
    /* Rounded corners */
    font-size: 18px;
    /* Increase font size */
}

#myBtn:hover {
    background-color: #555;
    /* Add a dark-grey background on hover */
}


/*button end*/

.mid {
    width: 15%;
    display: inline;
    text-align: center;
    vertical-align: middle;
}
/*message modal*/
#message iframe{
  bottom: 0;
  left: 0;
}
/* Modal background */
#message_modal_background {
  position: fixed;
  z-index: 1; 
  left: 0;
  bottom: 0;
  width: 30%; 
  height: 60%; 
  overflow: hidden; 
  background-color: white; /* Black w/ opacity */
}

/* Modal Content */
#message_modal_content {
  width: 100%;
  height: 100%;
}

#message_modal_content iframe{
  width: 100%;
  height: 100%;
}
       
      </style>
           
          </style>
        </head>
        <body>
          <header>
         
     
          </header>
          <main>
           <body>

            <div class = "main panel panel-default z-depth-4">
<div class = "panel-body">

<div class="media">
  <div class="media-left">
    
  </div>
  <div class="media-body">
  

  </div>
</div>

<div class = "post">




</div>


<center>

</center>
</div>
  
          </main>
          <footer>
           
          </footer>
          <script>
            const URL =
              "https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json";
            document.addEventListener("DOMContentLoaded", () => {
              //set up the IntersectionObserver to load more images if the footer is visible.
              //URL - https://gist.githubusercontent.com/prof3ssorSt3v3/1944e7ba7ffb62fe771c51764f7977a4/raw/c58a342ab149fbbb9bb19c94e278d64702833270/infinite.json
              let options = {
                root: null,
                rootMargins: "0px",
                threshold: 0.5
              };
              const observer = new IntersectionObserver(handleIntersect, options);
              observer.observe(document.querySelector("footer"));
              //an initial load of some data
              getData();
            });
            function handleIntersect(entries) {
              if (entries[0].isIntersecting) {
                console.warn("something is intersecting with the viewport");
                getData();
              }
            }
            function getData(numImages = 10){
                let i = 0;
              let main = document.querySelector("main");
              console.log("fetch some JSON data");

                fetch(URL)
                .then(response => response.json())
                .then(data => {
                  // data.items[].img, data.items[].name
                  data.items.forEach(item => {
                    randomnumbers = Math.floor(Math.random() * 501);
                    let fig = document.createElement("figure");
                    let fc = document.createElement("figcaption");
                    let img = document.createElement("img");
                    let description = document.createElement("description");

                    description.innerHTML=            
                      '<div">' + 
                        '<p class = "iconsec"><span><i class = "fa fa-heart-o">&nbsp&nbsp&nbsp&nbsp</i> &nbsp <i class = "fa fa-share"></i></span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><span class = "right">'+randomnumbers+'<b> likes</b></span></span></p>'+
                      '</div>';
                    img.src = item.img;
                    img.alt = item.name;
                    fc.textContent = item.name;
                    fig.appendChild(fc);
                    fig.appendChild(img);
                    main.appendChild(fig);
                    fig.appendChild(description)
                  
                  });
                });
              }
          </script>
            
     
    </section>

    <!-- -->
    
    <section id="s3">
        

        
        

        </script>
    </section>

    <!-- -->
    <section id="s4">

    </section>

    <!-- -->
    <section id="s5">

    </section>

    <!-- -->
    <section id="s6">

    </section>

    <!-- -->
    <section id="s7">

    </section>
    <!-- section ends-->

    <!-- footer -->
    <footer>&copy; COIS 3850H TEAM 19</footer>

</body>

</html>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxx Html end xxxxxxxxxxxxxxxxxxxxxxxxxxxx -->