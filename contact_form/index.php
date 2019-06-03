<?php require 'process_contact.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>We Want Thrall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Dokdo|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/main.css" type="text/css">
    <script src="script/jquery-3.3.1.min.js"></script>
</head>

<body class="text-light bg-secondary">


<nav class="navbar navbar-expand-sm bg-dark ">
      <a class="navbar-brand" href="#"><img src="assets/icon.png" alt="icon" class="icon"></a>
        <ul class="navbar-nav mr-auto active">
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="http://dana-hedrick.com/">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="https://github.com/Peekoh/portfolio/tree/master/contact_form">View Code</a>
          </li>
        </ul>


        
   
    </nav>

      </div>
    </nav>



</div>
    <header class="jumbotron container-fluid text-light bg-danger ">

        <h1 class="text-center">The Return of Thrall, Son of Durotan!</h1>
        <h2 class="text-center">Are you Tired of Losing? Let us return to the glory days of the horde! Get updates on
            the effort to bring back our former War
            Chief!</h2>
    </header>

    <form action="" method="POST" id="form" name="form">
        <div class="row container-fluid justify-content-sm-center">
            <div class="form-group col-sm-3">
                <label for="firstname">First Name:</label><input type="text" name="firstname" id="firstname"
                    class="form-control">
                <label for="lastname">Last Name:</label><input type="text" name="lastname" id="lastname"
                    class="form-control">
                <label for="mail">Mailbox:</label><input type="email" name="mail" id="mail" class="form-control">
            </div>
            <div class="form-group col-sm-3">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <label for="age">Age:</label>
                <select name="age" id="age" class="form-control" required>
                    <option value="18-100">18-100</option>
                    <option value="101-500">101-500</option>
                    <option value="501-1000+">501-1000+</option>
                    <option value="Ancient">Ancient</option>
                </select>
                <label for="gold">Gold for Contribution:</label>
                <input class="form-control" type="number" name="gold" id="gold" min="0" value="0">
            </div>
        </div>
    <div class="justify-content-sm-center container-fluid">
    <h2 class="text-center">What are you interested in?:</h2>
    <div class="form-group row justify-content-sm-center">

        <div class="col-sm-2">
        <div class="form-check">
        <input type="checkbox" name="interest[]" value="Raiding Uldir" id="raiding" class=" form-check-input">
            <label for="raiding" class="form-check-label">Raiding</label>
        </div>

        <div class="form-check">
        <input type="checkbox" name="interest[]" value="Exploring new islands" id="exploring" class="form-check-input">
            <label for="exploring" class="form-check-label">Exploring new islands</label>
        </div>

        <div class="form-check">
        <input type="checkbox" name="interest[]" value="Destroying the Alliance" id="pvp" class="form-check-input">
            <label for="pvp" class="form-check-label">Destroying the Alliance</label>
        </div>

        </div>

         <div class="col-sm-2">
        <div class="form-check">
        <input type="checkbox" name="interest[]" value="The Darkmoon Faire" id="faire" class="form-check-input">
            <label for="faire" class="form-check-label">The Darkmoon Faire</label>
        </div>

        <div class="form-check">
        <input type="checkbox" name="interest[]" value="Crafting for the war effort" id="crafting" class="form-check-input">
            <label for="crafting" class="form-check-label">Crafting for the war effort</label>
        </div>
            
        <div class="form-check">
        <input type="checkbox" name="interest[]" value="Obtaining powerful relics" id="pve" class="form-check-input">
            <label for="pve" class="form-check-label">Obtaining powerful relics</label>
        </div>
         </div>

            
        </div>
    </div>
       

        <div class="form-group container">
        <textarea id="comment" name="comment" class="form-control"
            placeholder="We want to hear from you! Tell us what you think!"></textarea><br>
        </div>
        <div class="row justify-content-sm-center container-fluid">
       
         <input type="submit" name="submit" id="submit" class="btn text-dark bg-light" value="For the Horde!">
        
        
        </div>
       <div id="msg" class="row container-fluid justify-content-sm-center text-center" ></div>
    </form>
   
    <script src="script/main.js"></script>
</body>

</html>