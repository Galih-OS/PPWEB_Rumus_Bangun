<?php
	function _autoload ($class_name)
	{
		include_once $class_name.".php;  //namanya apa
	}
	$rumusdatar = new rumus_bangun_datar;
	echo $rumusdatar->luas_lingkaran(5);
?>