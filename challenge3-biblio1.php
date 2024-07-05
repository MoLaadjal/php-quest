<?php
$stevensonsBooks = ['The Wrong Box' => 1889, 'The Black Arrow' => 1888, 'Treasure Island' => 1883];

asort($stevensonsBooks);

foreach($stevensonsBooks as $title => $year) {
  echo '> '  . $year . ' - ' . $title . "\n";
}

?>
