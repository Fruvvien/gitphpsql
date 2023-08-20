let loginEventListener= document.getElementById("loginPanel");

loginEventListener.addEventListener("submit", (e) =>{
    e.preventDefault();

    let email= document.getElementById("emailAddress").value;
    let password= document.getElementById("passw").value;
    
    let usersData= {
        email: email,
        passw: password,
    }

    $.ajax({


        url: "Action.php",
        type: "POST",
        data: {action: "logining", usersDataKey: usersData},

        success: function(response){
            let someOneUser=JSON.parse(response);
         if(someOneUser["success"]==true){
            document.getElementById("navbar").style.display="block";
            
         }else{
            alert("sikertelen");
         }
        },
        error: function(jqXhr, textStatus, errorMessage){

        }


    });



})