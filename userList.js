$(document).ready(function(){

});


$.ajax({
    url: "Action.php",
    type: "POST",
    data: {action: "userList"},

    success: function(response){
        let users= JSON.parse(response);
        let text="";

        users.forEach(user => {
            "<div class='card text-white bg-secondary mt-2 mb-2 col-4'>"+
            "<div class='card-header'>"+user.email+"</div>"+
                "<div class='card-body'>"+
                    "<div class='card-text'>"+user.user_name+"</div>"+
                "</div>"+
        "</div>";
        });
        document.getElementById("users").innerHTML=text;
    },
    error: function (jqXhr, textStatus, errorMessage) { 
            
    }
})