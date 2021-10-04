<?php
class Latihan1 extends CI_Controller 
{
	public function index()
	{
		echo "<b><h2> Selamat Datang di WP 2 </h2></b>";
	}

	public function penjumlahan($n1,$n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($nil1,$nil2);
		echo "Hasil Penjumlahan dari " .$n1. "+" .$n2. "=" .$hasil;
	}
}
