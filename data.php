<?php

// SV Version 2.1

// Diese Datei enthält sämtliche auf der Website verwendete Einträge zu den
// definierten Sektionen. Diese können mittels Zuweisung erweitert werden.

//============================================================================
// Allgemeine Daten
//============================================================================

$title = "Schülervertretung des Mons-Tabor-Gymnasiums";
$copyright = "Copyright &copy; 2017 AD-Team der Schülervertretung";
$logo = "img/global/logo.svg";
$favicon_png = 'img/global/favicon.png';
$keywords = 'sv, mtg, schülervertretung, schülersprecher, mons-tabor-gymnasium, mtg, montabaur, schule, vertrauenslehrer, schullball, spendenlauf, milchautomat, landliebe, nachhilfe, svmtg, armin pleiss pennen unter palmen';

//----------------------------------------------------------------------------
// Titel der Unterseite
// Syntax: $nav[] = ['name', 'url'];
//----------------------------------------------------------------------------

$nav[] = ['Start', 'index.php'];
$nav[] = ['Aktuelles', 'index.php?p=aktuelles'];
$nav[] = ['Kontakt', '../kontakt/index.php'];
$nav[] = ['Impressum', 'index.php?p=impressum'];

//============================================================================
// Hauptseite
//============================================================================

//----------------------------------------------------------------------------
// Gallerie
// Syntax: $gallerie[] = ['name', 'text', 'bild'];
// Achtung: Es werden maximal drei Zuweisungen angezeigt!
//----------------------------------------------------------------------------

$gallerie[] = ['Titel1', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'img/gallerie/arbeit.jpg'];

$gallerie[] = ['AndererTitel', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. ', 'img/gallerie/luftbild.jpg'];

$gallerie[] = ['Mitmachen!', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'img/gallerie/team.jpg'];

//----------------------------------------------------------------------------
// Einführungstext
// Syntax: $fussmatte[] = "Text"
// Weitere Zuweisungen erzeugen weitere Spalten.
//----------------------------------------------------------------------------

$fussmatte[] = 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur ';

$fussmatte[] = 'Sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd';


//----------------------------------------------------------------------------
// Aufgaben
// Syntax: $aufgaben[] = ['name', 'text', 'bild'];
//----------------------------------------------------------------------------


$aufgaben[] = ['Schulball', 'Der jährlich stattfindende Schulball wird von uns organisiert. Hier ist der Veranstaltungsausschuss entscheidend verantwortlich.', 'img/aufgaben/ball.jpg'];

$aufgaben[] = ['Spendenlauf', 'Hier heißt es "Laufen für den guten Zweck". Die rundenweise eingesammelten Spenden kommen sozialen Einrichtungen zu Gute.', 'img/aufgaben/lauf.jpg'];

$aufgaben[] = ['Milchautomat', 'Die allseits beliebte Schulmich wird von uns bereitgestellt und nachgefüllt. Lasst es euch schmecken!', 'img/aufgaben/milch.jpg'];

$aufgaben[] = ['Valentinsaktion', 'Damit ihr euren besonders lieben Mitschülern Dank schenken könnt, findes jedes Jahr unsere Valentinsaktion statt.', 'img/aufgaben/valentin.jpg'];

//----------------------------------------------------------------------------
// Ausschüsse
// Syntax: $teams[] = ['name', 'text', 'bild'];
//----------------------------------------------------------------------------


$teams[] = ['Schriftsteller', 'Thomas Mann, Friedrich Schiller, Johann Wolfgang von Goethe, Franz Kafka, Hermann Hesse, Günter Grass, Bertolt Brecht, Hölderlin, Heinrich Böll, Christa Wolf', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Künstler', 'Pablo Picasso, Vincent van Gogh, Claude Monet, Salvador Dalí, Leonardo da Vinci, Michelangelo, Frida Kahlo, Andy Warhol, Henri Matisse, Jackson Pollock', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Architekten', 'Frank Lloyd Wright, Le Corbusier, Zaha Hadid, Ludwig Mies van der Rohe, Antoni Gaudí, I. M. Pei, Norman Foster, Renzo Piano, Oscar Niemeyer, Alvar Aalto', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Bundeskanzler', 'Konrad Adenauer, Ludwig Erhard, Kurt Georg Kiesinger, Willy Brandt, Walter Scheel, Helmut Schmidt, Helmut Kohl, Gerhard Schröder, Angela Merkel, Olaf Scholz', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Bundespräsidenten', 'Theodor Heuss, Heinrich Lübke, Gustav Heinemann, Walter Scheel, Karl Carstens, Richard von Weizsäcker, Roman Herzog, Johannes Rau, Horst Köhler, Frank-Walter Steinmeier', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Softwareentwickler', 'Linus Torvalds, Dennis Ritchie, Bjarne Stroustrup, James Gosling, Guido van Rossum, Mark Zuckerberg, Steve Wozniak, Richard Stallman, Brian Kernighan, John Carmack', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Biologe', 'Charles Darwin, Gregor Mendel, Richard Dawkins, Carl Linnaeus, Louis Pasteur, Jane Goodall, Rosalind Franklin, Barbara McClintock, Albert Einstein, Richard P. Feynman', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Küche', 'Gordon Ramsay, Jamie Oliver, Wolfgang Puck, Julia Child, Alain Ducasse, Anthony Bourdain, Marco Pierre White, Heston Blumenthal, Thomas Keller, René Redzepi', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Unternehmer', 'Steve Jobs, Elon Musk, Bill Gates, Jeff Bezos, Richard Branson, Mark Zuckerberg, Warren Buffett, Larry Page, Sergey Brin, Jack Ma', 'img/adteam/platzhalter.jpg'];


$teams[] = ['Ingenieur', 'Nikola Tesla, Isambard Kingdom Brunel, Robert Hooke, James Watt, Henry Ford, Gustave Eiffel, Karl Benz, Leonardo da Vinci, Elon Musk, Marie Curie', 'img/adteam/platzhalter.jpg'];


//============================================================================
// Aktuelles
//============================================================================

//----------------------------------------------------------------------------
// Meldungen
// Syntax: $meldungen[] = ['name', 'text', 'bild (falls vorhanden)'];
//----------------------------------------------------------------------------

$meldungen[] = ['Neue Nachricht', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam'];

$meldungen[] = ['Alte Nachricht', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,'];


//----------------------------------------------------------------------------
// Dokumente
// Syntax: $doc[] = ['name', file_get_contents(pfadzudatei)];
//----------------------------------------------------------------------------

$doc[] = ['Noch ein Bericht', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['Toller Bericht', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['Protokoll vom 99.99.9999', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['SV Protokoll vom 88.88.8888', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['SV Protokoll vom 77.77.7777 ', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['SV Protokolll vom 66.66.6666', file_get_contents("doc/loremipsum.txt")];

$doc[] = ['SV Protokolll vom 55.55.5555', file_get_contents("doc/loremipsum.txt")];



//============================================================================
// Impressum
//============================================================================

//----------------------------------------------------------------------------
// Infotext
// Syntax: $adtext[] = 'text';
//
// Bitte maximal zwei Zuweisungen sonst werden neue Spalten idR unter die
// alten gesetzt.
//----------------------------------------------------------------------------

$adtext[] = "Max Mustermann<br/>Musterstraße 123<br/>12345 Musterstadt<br/>Deutschland<br/>Telefon: +49 123 4567890<br/>E-Mail: max.mustermann@example.com";

$adtext[] = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea";


//----------------------------------------------------------------------------
// Impressum / AD-Team
// Syntax: $adteam[] = ['Name', 'Funktion', 'Bild'];
//----------------------------------------------------------------------------
$adteam[] = ['Erwin Schrödinger', 'Leiter', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Albert Einstein', 'Chefentwickler', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Werner Heisenberg', 'Postmaster', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Joseph-Louis Lagrange', 'Schriftführer', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Carl Friedrich Gauß', 'Social Media Manager', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Pierre-Simon Laplace', 'Mitglied', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Kurt Gödel', 'Mitglied', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Joseph Fourier', 'Mitglied', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Marie Curie', 'Mitglied', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Max Planck', 'Mitglied', 'img/adteam/platzhalter.jpg'];

$adteam[] = ['Wilhelm Wien', 'Mitglied', 'img/adteam/platzhalter.jpg'];


?>
