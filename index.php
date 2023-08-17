<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Gitesphpsql
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Gitesphpsql</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?page=userList">Felhasználók listázása</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?page=registration">Regisztráció</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?page=deleteUser">Felhasználó törlése</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="?page=updateUser">Felhasználó szerkesztés</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


    <div class="container-fluid">
        <?php
            if(isset($_GET["page"])){
                switch($_GET["page"]){
                    case "userList":
                        include "userList.php";
                        break;
                    default:
                        include "userlist.php";
                        break;
                }
                    
            }

        ?>
    </div>
        
</body>
</html>