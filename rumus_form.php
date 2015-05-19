<?php
	class rumus_form {
		public $panjang;
		public $lebar;
		public $tinggi;
		public $jari;
		public $diameter;
		
		protected function luas_persegi()
		{
			$hasil = $this -> panjang * $this -> lebar;
			return $hasil;
		}
		public function show_luas_persegi()
		{
			return $this -> luas_persegi();
		}
		
		protected function luas_segitiga()
		{
			$hasil = $this -> alas * $this -> tinggi / 2;
			return $hasil;
		}
		public function show_luas_segitiga()
		{
			return $this -> luas_segitiga();
		}
		
		protected function luas_lingkaran()
		{
			$r = $this -> diameter / 2;
			$hasil = 3.14 * $r * $r;
			return $hasil;
		}
		public function show_luas_lingkaran()
		{
			return $this -> luas_lingkaran();
		}
		
		protected function volume_balok()
		{
			$hasil = $this -> panjang * $this -> lebar * $this -> tinggi;
			return $hasil;
		}
		public function show_volume_balok()
		{
			return $this -> volume_balok();
		}
		
		protected function volume_bola()
		{
			$r = $this -> diameter / 2;
			$hasil = (4 * 3.14) * ($r * $r);
			return $hasil;
		}
		public function show_volume_bola()
		{
			return $this -> volume_bola();
		}
		
	}
?>