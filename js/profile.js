// This block will run when the DOM is loaded (once elements exist)
window.addEventListener("DOMContentLoaded", () => {

    //
    const profile = document.getElementById("profile");
    const profile_box = document.getElementById("profile_box");
    const change_password_box = document.getElementById("change_password_box");
    const change_password_button = document.getElementById("chang_password");

    //when the profile button clicked, get the profile data from database and fetch the profile page
    profile.addEventListener("click", (ev) => {

        //user_id = parseInt(username.name);
        //instantiate new XHR object
        const xhr = new XMLHttpRequest();
        //use xhr to open get connection to profile
        xhr.open("GET", "profile.html?username="+username); //waiting for connecting to the back-end
        //attach load event to xhr
        xhr.addEventListener("load", (ev) => {
            // console.log(xhr);
            //if success
            if (xhr.status == 200) {

                profile_box.innerHTML = 
                '<div">'+
                    '<div>Username: ' + username + '</div>'+
                    '<div>Email Address:' + user_email_address + '</div>'+
                '</div>';
                change_password_button.style.display = "flex";
            }else {
                console.log(`error: ${xhr.status}`);
            }
        });
        xhr.send();
    });

    //change password
    change_password_button.addEventListener("click", (ev) => {
        var if_change_password = confirm("Are you sure you want to your password?");
        if(if_change_password = true){
            //get the new password
            change_password_box.innerHTML=
            '<div id="new_password">' + 
            '<input id="new_password_1st_input" type="text" placeholder=" Enter Your New Password..."></input>'
            '<input id="new_password_2nd_input" type="text" placeholder=" Reconfirm Your New Password..."></input>'
            '<div id="password_validation"></div>'
            '</div>';
            
            //password validation
            var password_1st_input = document.getElementById("new_password_1st_input");
            var password_2nd_input = document.getElementById("new_password_2nd_input");
            var password_validation = document.getElementById("password_validation");
            if(password_1st_input == password_2nd_input){
                password_validation.innerText= 'The Password is matched!';
            }else{
                password_validation.innerText = 'The Password is not matched!';
            }
        }
    });

});