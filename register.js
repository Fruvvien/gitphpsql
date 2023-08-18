let registerPanel= document.getElementById("users");

registerPanel.addEventListener("button", (e) => {

    let username= document.getElementById("username").value;
    let email= document.getElementById("email").value;
    let password= document.getElementById("password").value;

    let allDatas={
        userName: username,
        email: email,
        password: password
    };

    $.ajax({
        url: "Action.php",
        type: "POST",
        data: {action: "register", allDatasKey: allDatas },

        success: function(response){
            window.location.href= "?page=userList";
        },
        error: function (jqXhr, textStatus, errorMessage){

        }
    });



})