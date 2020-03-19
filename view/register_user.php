<?php
    include("../config/connect.php");
    include("../src/register_user.php");
        
    // dd($_POST);

    if(!empty($_POST)){
        $sfd = setFormData();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie Users</title>
    <link rel="stylesheet" href="../assets/css/register/register.css">
</head>
<body>
       
                   <form method="post">

                    <div class="form-group">
                    <label>Naam</label>
                       <input type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required />
                        <input type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" />
                        <input type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required />
                    </div>


                    <div class="form-group">
                    <label>Geboortedatum</label>
                        <input type="date" class="form-control" name="field_birthdate" id="birthdate" required /><br>
                    </div>

                    <div class="form-group">
                    <label>E-mail adres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required /><br>
                    </div>

                    <div class="form-group">
                    <label>Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
                    </div>

                    <input type="submit" class="form-control" class="btn btn-black" name="submit" value="Registreren" />
                </form>
            
       
    </body>
</html>