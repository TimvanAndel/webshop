<?php
    include("../config/connect.php");
    include("../src/register_customer.php");
        
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
    <title>Tim - webshop - registratie</title>
    <link rel="stylesheet" href="../assets/css/register/register.css">
</head>
<body>
       
                   <form method="post">



                    <div class="form-group">
                    <label>Gender</label>
                        <input type="radio" name="gender" id="gender" value="male"><span>Man</span>
                        <input type="radio" name="gender" id="gender" value="female"><span>Vrouw</span>
                        <input type="radio" name="gender" id="gender" value="Other"><span>Overig</span>
                    </div>

                    <div class="form-group">
                    <label>Naam</label>
                       <input type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required />
                        <input type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" />
                        <input type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required />
                    </div>


                    <div class="form-group">
                    <label>Straat</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Straat" required /><br>
                    </div>


                    <div class="form-group">
                    <label>Huisnummer</label>
                        <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="Huisnummer" required /> <input type="text" class="form-control" name="housenumber_addon" id="housenumber_addon" placeholder="Toevoeging"/><br>
                    </div>

                    <div class="form-group">
                    <label>Postcode</label>
                        <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode" required /><br>
                    </div>

                    <div class="form-group">
                    <label>Plaats</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Plaats" required /><br>
                    </div>


                    <div class="form-group">
                    <label>Telefoonnummer</label>
                        <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" class="form-control" name="phone" id="phone" placeholder="0612345678" required /><br>
                    </div>


                    <div class="form-group">
                    <label>E-mailadres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required /><br>
                    </div>

                    <div class="form-group">
                    <label>Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
                    </div>

                    <div class="form-group">
                    <label>Nieuwsbrief</label>
                        <input type="radio" name="newsletter" id="newsletter" value="yes"><span>Ja</span>
                        <input type="radio" name="newsletter" id="newsletter" value="no"><span>Nee</span>
                    </div>

                    <input type="submit" class="form-control" class="btn btn-black" name="submit" value="Registreren" />
                </form>
            
       
    </body>
</html>

