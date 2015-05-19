<?php
	interface konsepRumus
	{
		public function luas_persegi();
		public function luas_segitiga();
		public function luas_lingkaran();
	}
	
	class rumus implements konsepRumus
	{
		public function luas_persegi() // Persegi
		{
			return "ini luas persegi";
		}
		
		public function luas_segitiga()  //Segitiga
		{
			return "ini luas segitiga";
		}
		
		public function luas_lingkaran() //Lingkaran
		{
			return "ini luas lingkaran";
		}
	}
	$rumus = new rumus;
	echo $rumus->luas_persegi()."<br/>";
	echo $rumus->luas_segitiga()."<br/>";
	echo $rumus->luas_lingkaran()."<br/>";
?>