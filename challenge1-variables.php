<?php
$bookTitle = "Voyage avec un âne dans les Cévennes";
$hasRead = false;
$releaseYear = 2017;
$price = 6.20;

echo "Book Title: " .$bookTitle . "<br>";
echo "Has Read: " . ($hasRead ? "Yes" : "No") . "<br>";
echo "Release Year: " . $releaseYear . "<br>";
echo "€" . number_format($price, 2) . "<br>";
?>


