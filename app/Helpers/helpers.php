<?php 

function active(string $url, string $res = 'active', $group = false): String
{
	$active = $group ? request()->is($url) || request()->is($url.'/*') : request()->is($url);
	
	return $active ? $res : '';
}

function localDate(string $date): String
{
	return date('d M Y', strtotime($date));
}

function image(string $image): String
{
	return asset('storage/img/'.$image);
}

 ?>