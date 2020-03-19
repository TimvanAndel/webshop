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
    <title>Registratie Customers</title>
    <link rel="stylesheet" href="../assets/css/register/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
       
                   <form method="post">



                    <div class="form-group">
                    <label for="gender">Gender</label>
                        <input type="radio" name="gender" id="gender" value="male" class="form-control"><span>Man</span>
                        <input type="radio" name="gender" id="gender" value="female" class="form-control"><span>Vrouw</span>
                        <input type="radio" name="gender" id="gender" value="Other" class="form-control"><span>Overig</span>
                    </div>

                    <div class="form-group">
                    <label for="name">Naam</label>
                       <input class="form-control" type="text" class="form-control" name="field_firstname" id="fname" placeholder="Voornaam" required />
                        <input class="form-control" type="text" class="form-control" name="field_infixname" placeholder="Tussenvoegsel" />
                        <input class="form-control" type="text" class="form-control" name="field_lastname" placeholder="Achternaam" required />
                    </div>


                    <div class="form-group">
                    <label for="street">Straat</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Straat" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="housenumber">Huisnummer</label>
                        <input type="text" class="form-control" name="housenumber" id="housenumber" placeholder="Huisnummer" required /> <input type="text" class="form-control" name="housenumber_addon" id="housenumber_addon" placeholder="Toevoeging"/><br>
                    </div>

                    <div class="form-group">
                    <label for="zipcode">Postcode</label>
                        <input type="text" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="city">Plaats</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Plaats" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="phone">Telefoonnummer</label>
                        <input type="text" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" class="form-control" name="phone" id="phone" placeholder="0612345678" required /><br>
                    </div>


                    <div class="form-group">
                    <label for="email">E-mailadres</label>
                        <input type="email" class="form-control" name="field_email" id="email" placeholder="E-mailadres" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="field_password" id="passwd" placeholder="Wachtwoord" required /><br>
                    </div>

                    <div class="form-group">
                    <label for="newsletter">Nieuwsbrief</label>
                        <input type="radio" name="newsletter" id="newsletter" value="yes"><span>Ja</span>
                        <input type="radio" name="newsletter" id="newsletter" value="no"><span>Nee</span>
                    </div>

                    <input type="submit" class="form-control" class="btn btn-black" name="submit" value="Registreren" />
                </form>
            
       
    </body>
</html>

