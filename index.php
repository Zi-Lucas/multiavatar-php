<?php

require_once("Multiavatar.php");


$avatarId = "Starcrasher";
$multiavatar = new Multiavatar($avatarId, null, null);
echo($multiavatar->svgCode);


// Without the environment part
$avatarId = "Pandalion";
$multiavatar = new Multiavatar($avatarId, true, null);
echo($multiavatar->svgCode);


// Generate a specific version
$avatarId = "Pandalion";
$multiavatar = new Multiavatar($avatarId, null, array("part" => "11", "theme" => "C"));
echo($multiavatar->svgCode);


// Generate a specific version
$avatarId = "Pandalion";
$multiavatar = new Multiavatar($avatarId, null, array("part" => "08", "theme" => "C"));
echo($multiavatar->svgCode);


// Generate a specific version
$avatarId = "Pandalion";
$multiavatar = new Multiavatar($avatarId, null, array("part" => "15", "theme" => "B"));
echo($multiavatar->svgCode);


// Test with integer
$avatarId = 123456789;
$multiavatar = new Multiavatar($avatarId, null, null);
echo($multiavatar->svgCode);


// $avatarId = "a86f755add37fe0b649c";
// $multiavatar = new Multiavatar($avatarId, null, null);
// echo($multiavatar->svgCode);


// $avatarId = "f7542474d54d2d2d97e4";
// $multiavatar = new Multiavatar($avatarId, null, null);
// echo($multiavatar->svgCode);