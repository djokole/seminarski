<?php
if (isset ($_GET['id'])){
    if (is_numeric($_GET['id'])){
        $pomocna = $_GET['id'];
        
        include "config.php";


        $upit = "SELECT * FROM igrice WHERE id = '$pomocna'";

        $rezultat = $link->query($upit);

        $json_array = array();


        while ($red = $rezultat->fetch_object()) {

            $json_array = [
               'id' => $red->id,
               'igrica' => $red->igrica,
               'tvorac' => $red->tvorac,
               'platforma' => $red->platforma,
               'brigraca' => $red->brigraca,
               'ocena' => $red->ocena,
           ];	

           echo json_encode($json_array);
    //    echo "<p>" . $red->igrica . "<p>";
       }

       $link->close();
   }
}
?>