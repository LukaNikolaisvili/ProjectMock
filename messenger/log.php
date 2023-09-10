<div id="chatbox"><?php
if(file_exists("log.html") && filesize("log.html") > 0){
     
    $contents = file_get_contents("log.html");         
    echo $contents;

    //Load the file containing the chat log
function loadLog(){     
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){        
            $("#chatbox").html(html); //Insert chat log into the #chatbox div               
        },
    });
}
}
?></div>

