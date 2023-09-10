// This block will run when the DOM is loaded (once elements exist)
window.addEventListener("DOMContentLoaded", () => {
    //get darkmode button by id
    const dark_mode_btn = document.getElementById("darkmode");
    //0 means non-dark mode, 1 means dark mode
    const current_background_color = 0; 

    //login/sign up
    const login_sign_up_button = document.getElementById("navbar_login_btn");
    const login_sign_up_modal_background = document.getElementById("login_sign_up_modal_background");
    const modal_close = document.querySelector(".modal_close");

    //message button
    const message_button = document.getElementById("message_btn");
    const message_modal_background = document.getElementById("message_modal_background");
    const modal_close2 = document.querySelector(".modal_close2");



    /*************************
    login and sign up modal
    **************************/
    // When the user clicks on the button, open the modal
    //and get the login page 
    login_sign_up_button.onclick = function() {
        login_sign_up_modal_background.style.display = "flex";
        login_sign_up_modal_background.style.justifyContent = "center";
        login_sign_up_modal_background.style.alignItems = "center";
    }
    
    // close button on modal on login window
    modal_close.onclick = function () {
        login_sign_up_modal_background.style.display = "none";
    }
    //close button on modal message window
    modal_close2.onclick = function () {
        message_modal_background.style.display = "none";
    }
    // close the modal when user clicks anywhere outside of the modal
    window.onclick = function (e) {
        if (e.target == login_sign_up_modal_background) {
            login_sign_up_modal_background.style.display = "none";
        }
    }

    /******************************* 
        Message modadl
    *********************************/
    // When the user clicks on the button, open the modal
    //and get the message page 
    message_button.onclick = function() {
        message_modal_background.style.display = "flex";
        message_modal_background.style.justifyContent = "center";
        message_modal_background.style.alignItems = "center";
    }




    /***************************
            Dark mode
     ****************************/
    dark_mode_btn.addEventListener("click", () => {
        //if dark mode currently off
        if(current_background_color = 0){
            background_color("black");
            color = 1;
        }
        else{
            background_color("white");
            color = 0;
        }
    });




});