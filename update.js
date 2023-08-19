$(document).ready(function(){
    userListUpdate();
});

function userListUpdate(){

    $.ajax({
        
        url: "Action.php",
        type: "POST",
        data: {action:"userList"},

        success: function(response){
            let users= JSON.parse(response);
            let text="";
            users.forEach(user => {
                text+=
                "<div class='card text-white bg-secondary mt-2 mb-2 col-4'>"+
                "<div class='card-header'> <input type='email' class='form-control' id='email"+user.id+"' name='email' value='"+user.email+"'></div>"+
                    "<div class='card-body'>"+
                        "<div class='card-text'> <input type='text' class='form-control' id='userName"+user.id+"' name='userName' value='"+user.user_name+"'></div>"+
                    "</div>"+
                "<div class='card-footer'>"+
                    "<button class='btn btn-warning w-100' onclick='updateUser("+user.id+")'>Szerkesztés</button>"+
                "</div>"+
            "</div>";
            });
            document.getElementById("users").innerHTML=text;
        },
        error: function (jqXhr, textStatus, errorMessage) { 
                
        }

});

}

function updateUser(userId, userName, email){

    let userName= document.getElementById("userName").value;
    let email= document.getElementById("email").value;

    let datas={
        userName: userName,
        email: email
    };

    $.ajax({

        url: "Action.php",
        type: "POST",
        data: {action: "updateList" , datasKey: datas, userIdKey: userId},

        success: function(response){
            window.location.href="?page=userList.php"
        },
        error: function (jqXhr, textStatus, errorMessage) { 
                
        }

    });


}