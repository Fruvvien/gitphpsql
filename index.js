$(document).ready(function(){
    sessionIsExist();
}); 

function sessionIsExist(){
    $.ajax({

            url: "Action.php",
            type: "POST",
            data: {action: "sessionIsExist"},

            success: function(response){
                if(response){
                    document.getElementById("navbar").style.display = "block";
                    
                }else{
                    document.getElementById("loginPanel").style.display = "block";
                    document.getElementById("navbar").style.display = "none";
                }


            },

    })
}