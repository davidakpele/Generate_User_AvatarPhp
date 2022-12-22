<?php
/**
 * Avatar Background Colors
 */

$colors = ["#65647C", "#7F669D", "#FF8DC7", "#7895B2", "#898AA6", "#68A7AD", "#94B49F", "#8E806A"];


function getAvatarBG(){
	global $colors;
	$colorsCount = count($colors);
	$key = mt_rand(0,7);
	return $colors[$key];
}

function avatarStyles(){
	$styles = [
		"background: ".getAvatarBG(),
		"color: #fff",
		"height: 50px",
		"width: 50px",
		"border-radius: 100%",
		"display:flex",
		"justify-content: center",
		"align-items: center",
		"font-size: 15px",
	];
	return implode(";", $styles);
}

function generateAvatarFromName($firstName="", $lastName=""){
	if(empty($firstName)){
		return "Can't Generate Avatar! Firstname must be provided.";
	}
	$nameInitial = (substr($firstName, 0,1));
	if(!empty($lastName))
	$nameInitial .= (substr($lastName, 0,1));
	return '<div class="generated-user-avatar" style="'.avatarStyles().'">'.$nameInitial.'</div>';
}