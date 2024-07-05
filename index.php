<?php

function writeSecretSentence(string $param1, string $param2) {
  $sentence = $param1 . " s'incline face à " . $param2;
  return $sentence;
}

echo writeSecretSentence("le lion", "le feu");
echo "\n";
echo writeSecretSentence("le moustique", "le vent");
echo "\n";
echo writeSecretSentence("le colibri", "l'hiver");
echo "\n";
echo writeSecretSentence("le gecko", "la lune");
echo "\n";