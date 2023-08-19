$(document).ready(function(){
    deleteUserList();
});
    
function deleteUserList(){
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
                        "<div class='card-header'>"+user.email+"</div>"+
                "<div class='card-body'>"+
                        "<div class='card-text'>"+user.user_name+"</div>"+
                "</div>"+
                "<div class='card-footer' >"+ 
                        "<button class='btn btn-danger w-100' onclick='deleteUser("+user.id+")'>Törlés</button>"+
                "</div>"+
                "</div>";
            });
            document.getElementById("users").innerHTML=text;
        },
        error: function (jqXhr, textStatus, errorMessage) { 
                
        }

});
}

function deleteUser(userId){
    $.ajax({

        url: "Action.php",
        type: "POST",
        data: {action: "deleteUser", userIdKey: userId},

        success: function(response){
            deleteUserList();

        },
        error: function (jqXhr, textStatus, errorMessage) { 
                
        }


    });

}