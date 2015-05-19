<?php
include_once("rumus_form.php");
class rumus_bangun_ruang extends rumus_form
{
	public $tinggi;
	private function volume_balok()
	{
		$hasil=$this->panjang*$this->lebar*$this->tinggi;
		return $hasil;
	}
	public function show_volume_balok()
	{
		return $this->volume_balok();
	}
	public function volume_bola($x)
	{
		$this->diameter=$x;
		$r=$this->diameter/2;
		$hasil=4*3.14*$r*$r/3;
		return $hasil;
	}
}
?>