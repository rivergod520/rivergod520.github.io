<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array("rivergod520.github.io/wallpapers/01.png", 
    "https://rivergod520.github.io/wallpapers/02.png",
    "https://rivergod520.github.io/wallpapers/03.png", 
    "https://rivergod520.github.io/wallpapers/04.png",
    "https://rivergod520.github.io/wallpapers/07.png", 
    "https://rivergod520.github.io/wallpapers/08.png", 
    "https://rivergod520.github.io/wallpapers/09.png");

$randomRedirection = $myLinks[array_rand($myLinks)]; 
header("Location: $randomRedirection"); 
?> 

</body>
</html>
