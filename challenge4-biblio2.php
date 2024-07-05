<?php
$movies = [
  'The Strange Case of Dr.Jekyll and Mr.Hyde' => ['Tony Todd', 'Tracy Scoggins', 'Vernon Wells'],
  'The Suicide Club' => ['Jonathan Pryce', 'David Morrissey', 'Paul Bettany'],
  'The Ebb-Tide' => ['Robbie Coltrane', 'Chris Barnes', 'Steven Mackintosh'] 
];

foreach ($movies as $title => $actors) {
  $actorList = implode(', ', $actors);
  echo 'Dans le film ' . $title . ', les principaux acteurs sont : ' . "\n" . $actorList . ".\n" ."\n";
}
?>