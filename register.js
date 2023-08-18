let registerPanel= document.getElementById("users");

registerPanel.addEventListener("submit", (e) => {
    e.preventDefault();
    
    let username= document.getElementById("username").value;
    let email= document.getElementById("email").value;
    let password= document.getElementById("password").value;
    
    let allDatas
    if(username != "" && email != "" && password != ""){
        allDatas={
        userName: username,
        email: email,
        password: password
    };
    }else{
        alert("Nem írt be adatokat");
    }
    
    
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