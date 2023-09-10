
<?php
 
 session_start();
  
 if(isset($_GET['logout'])){    
      
     //Simple exit message
     $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>". $_SESSION['name'] ."</b> has left the chat session.</span><br></div>";
     file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
      
     session_destroy();
     header("Location: index.php"); //Redirect the user
 }
  
 if(isset($_POST['enter'])){
     if($_POST['name'] != ""){
         $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
     }
     else{
         echo '<span class="error">Please type in a name</span>';
     }
 }
  
 function loginForm(){
     echo
     '<div id="loginform">
     <p>Please enter your name to continue!</p>
     <form action="index.php" method="post">
       <label form="name">Name &mdash;</label>
       <input type="text" name="name" id="name" />
       <input type="submit" name="enter" id="enter" value="Enter" />
     </form>
   </div>';
 }
  
 ?>
 
 <head>
               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
               <title>TeamChat</title>
               <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
               <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
               <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
               <style>
               body{
                 background-color: white;
                 font-family: 'Varela Round', sans-serif;
               }
               .form-inline {
                 display: inline-block;
               }
               

               </style>
               </head> 
               <body>
               
               </body>
 
             
             <!--or open a new page
             <a href="html/login.html">Login/Sign Up</a>
             -->
         </div>
     </header> 
 
  
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="utf-8" />
  
         <title>TeamChat</title>
         <meta name="description" content="TeamChat" />
         <link rel="stylesheet" href="style.css" />
     </head>
     <body>
     
         <div id="wrapper">
             <div id="menu">
                 <p class="welcome">Welcome, <b><?php echo $_SESSION['username']; ?></b></p>
                 
             </div>
  
             <div id="chatbox">
             <?php
             if(file_exists("log.html") && filesize("log.html") > 0){
                 $contents = file_get_contents("log.html");          
                 echo $contents;
             }
             ?>
             </div>
  
             <form name="message" action="">
                 <input name="usermsg" type="text" id="usermsg" />
                 <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
             </form>
         </div>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script type="text/javascript">
             // jQuery Document
             $(document).ready(function () {
                 $("#submitmsg").click(function () {
                     var clientmsg = $("#usermsg").val();
                     $.post("post.php", { text: clientmsg });
                     $("#usermsg").val("");
                     return false;
                 });
  
                 function loadLog() {
                     var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
  
                     $.ajax({
                         url: "log.html",
                         cache: false,
                         success: function (html) {
                             $("#chatbox").html(html); //Insert chat log into the #chatbox div
  
                             //Auto-scroll           
                             var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                             if(newscrollHeight > oldscrollHeight){
                                 $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                             }   
                         }
                     });
                 }
  
                 setInterval (loadLog, 2500);
  
                 $("#exit").click(function () {
                     var exit = confirm("Are you sure you want to end the session?");
                     if (exit == true) {
                     window.location = "index.php?logout=true";
                     }
                 });
             });
         </script>
     </body>
 </html>

 
 <style >
     
     * {
     margin: 0;
     padding: 0;
   }
    
   body {
     margin: 20px auto;
     
     font-weight: 300;
   }
    
   form {
     padding: 1em;
     display: flex;
     gap: 1em;
     justify-content: center;
   }
    
   form label {
     font-size: 1.5rem;
     font-weight: bold;
   }
    
   input {
     background: rgba(236, 232, 232, 0.8);
    font-family: 'Varela Round', sans-serif;
   }
    
   a {
     color: #0000ff;
     text-decoration: none;
   }
    
   a:hover {
     text-decoration: underline;
   }
    
   #wrapper,
   #loginform {
     margin: 90 auto;
     background: #eee;
     max-width: 90%;
     border: 4px solid #212121;
     border-radius: 10px;
   }
    
   #loginform {
     padding: 20px;
     text-align: center;
   }
    
   #loginform p {
     padding: 50px 25px;
     font-size: 2rem;
     font-weight: bold;
   }
    
   #chatbox {
     text-align: left;
     margin: 0 auto;
     margin-bottom: 25px;
     padding: 30px;
     background: #fff;
     height: 38%;
     width: 90%;
     border: 1px solid #a7a7a7;
     overflow: auto;
     border-radius: 4px;
     border-bottom: 4px solid #a7a7a7;
   }
    
   #usermsg {
     flex: 1;
     border-radius: 4px;
     border: 1px solid #ff9800;
   }
    
   #name {
     border-radius: 4px;
     border: 2px solid #ff9800;
     padding: 2px 8px;
   }
    
   #submitmsg,
   #enter{
     background: #ff9800;
     border: 2px solid #e65100;
     color: gray;
     padding: 4px 10px;
     font-weight: bold;
     border-radius: 4px;
   }
    
   .error {
     color: #ff0000;
   }
    
   #menu {
     padding: 20px 60px;
     display: flex;
   }
    
   #menu p.welcome {
     flex: 1;
   }
    
   a#exit {
     color: white;
     background: #c62828;
     padding: 4px 8px;
     border-radius: 4px;
     font-weight: bold;
   }
    
   .msgln {
     margin: 0 0 5px 0;
   }
    
   .msgln span.left-info {
     color: orangered;
   }
    
   .msgln span.chat-time {
     color: #777;
     font-size: 60%;
     vertical-align: super;
   }
    
   .msgln b.user-name, .msgln b.user-name-left {
     font-weight: bold;
     background: #536e7b;
     color: white;
     padding: 2px 4px;
     font-size: 90%;
     border-radius: 4px;
     margin: 0 5px 0 0;
   }
    
   .msgln b.user-name-left {
     background: orangered;
   }
 
 </style>
 
 </html>
 