<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/formulaire.css">
</head>

<!-- on peut representer, au choix, un array de 2 façons:  array() == [] -->
<?php
echo "<pre>";
echo "TEST"


    print_r($POST)


echo '</pre>';
?>
<body>
<div class = "container">

<div class = "listing">
    <h2>Listing</h2>
        <table>
   <tr id=head>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Courriel</th>
       <th>Date de Naissance</th>
       <th>Genre</th>
       <th>Nationalité</th>
       <th>Commentaire</th>
</tr>
   <!-- ceci est un exemple de tableau HARD CODE en HTML, pas alimenté par PHP 
    <tr> 
        <td>Lopez</td>
        <td>Miguel</td>
        <td>lopez@gmail.com </td>
        <td>01-01-1980</td>
        <td>Homme</td>
        <td>CA</td>
        <td>Ce tableau</td>
    </tr>
    <tr> 
        <td>Raybaud</td>
        <td>Fabien</td>
        <td>raybaud@gmail.com</td>
        <td>01-01-1980</td>
        <td>Homme</td>
        <td>FR</td>
        <td>est vraiment</td>
    </tr>
        <tr> 
        <td>Green</td>
        <td>Michael</td>
        <td>green@gmail.com </td>
        <td>01-01-1980</td>
        <td>Homme</td>
        <td>US</td>
        <td>formidable</td>
    </tr>
    <tr> 
        <td>Putina</td>
        <td>Agneska</td>
        <td>putina@gmail.com</td>
        <td>01-01-1980</td>
        <td>Femme</td>
        <td>ZE</td>
        <td>c'est une</td>
    </tr>
        <tr> 
        <td>Busch</td>
        <td>Kyle</td>
        <td>busch@gmail.com</td>
        <td>01-01-1980</td>
        <td>Homme</td>
        <td>US</td>
        <td>vraie réussite</td>
    </tr>
    -->
    <tr id=foot>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Courriel</th>
       <th>Date de Naissance</th>
       <th>Genre</th>
       <th>Nationalité</th>
       <th>Commentaire</th>
   </tr>
        </table>
</div>

<div class = "formulaire">
    <h2>Formulaire d'enregistrement</h2>
        <form method="POST" action="results.php">
            <label for="fname">Prénom</label>
            <input type="text" id="fname" name="fname" placeholder="Prénom">
            <label for="lname">Nom</label>
            <input type="text" id="lname" name="lname" placeholder="Nom">
            <label for="email">Courriel</label>
            <input type="text" id="email" name="email" placeholder="Courriel">
            <label for="mdpasse">Mot de Passe</label>
            <input type="password" id="mdpasse" name="mdpasse">
            <label for="ddn">Date de Naissance</label>
            <input type="date" id="ddn" name="ddn">
            <input type="radio" name="gender" value="male" checked>
            <label>Homme</label>
            <input type="radio" name="gender" value="female">
            <label>Femme</label>
            <select id="country" name="country">
                <option value="" disabled selected>Nationalité</option>
                <option value="fr">France</option>
                <option value="uk">United Kingdom</option>
                <option value="usa">United States</option>
                <option value="ca">Canada</option>
                <option value="ze">Zimbabwe</option>
            </select>
            <label>Commentaires</label>
            <textarea> </textarea>
<!-- COMMENTAIRE COMMAND + FORWARD SLASH "/"  -->
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
</div>
</div>

</body>
</html>

