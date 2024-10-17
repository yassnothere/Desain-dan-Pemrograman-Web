<?php
$pattern = "/[a-z]/"; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = "/apple/"; 
$replacement = 'banana'; 
$text = "I like apple pie."; 

$new_text = preg_replace($pattern, $replacement, $text);

echo "<br>" . $new_text; // Output: "I like banana pie."

// $pattern = "/go*d/"; // Cocokkan "god", "good", "gooood", dll.
// $pattern = "/go?d/"; // Cocokkan "god" atau "gd"
$pattern = "/god{2,4}/"; // Cocokkan "good" atau "goood"
$text = "god is good.";

if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}
?>