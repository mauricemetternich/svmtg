<?php

// SV Version 2.1
// Konfigurationsdatei für Unterseiten

// Hier wird der Inhalt der einzelnen Unterseiten bestimmt. Bitte achtet
// darauf, dass neue Seiten ebenfalls einen Eintrag im Navigationsmenü
// der data.php erhalten, aus der sämtliche hier verwendete Variablen stammen.

// ===== ACHTUNG! =====
// Hier gilt ebenso: Bitte nur bearbeiten, wenn ihr wisst, was ihr tut.
// Wenn ihr nichts mit den Kontrollstrukturen hier anfangen könnt, ist das
// z.B. nicht der Fall!

//============================================================================
// Aktuelles
//============================================================================

if($_GET['p'] == "aktuelles") {
   genTitel("Aktuelles");
   genDienste("Meldungen", $meldungen, NULL);
   genTextMenu("Berichte", $doc);
}

//============================================================================
// Impressum
//============================================================================

elseif($_GET['p'] == "impressum") {
   genTitel("Impressum");
   genText("AD-Team", $adtext);
   genTeam("Besetzung", $adteam);
} 


//============================================================================
// Hauptseite
//============================================================================

else {
   genGallerie($gallerie);
   genText("Willkommen", $fussmatte);
   genDienste("Unsere Aufgaben", $aufgaben);
   genTeam("Teams", $teams);
}

?>
