<?php

 require 'connexion.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $street = $_POST['street'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];

 
        $query = $db->prepare('INSERT INTO address (street, city, zipcode) VALUES (:street, :city, :zipcode)');

        $parameters = [
            'street' => $street,
            'city' => $city,
            'zipcode' => $zipcode
        ];

        $query->execute($parameters);

        echo "L'adresse a été créée avec succès.";

    } 

?>