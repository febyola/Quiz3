<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('tabel',array('data' => $data));
		$data=$this->mymodel->GetMahasiswa();
		$this->load->view('tabel',array('data' => $data));
	}

	public function insert() 
	{
		$ins = $this->mymodel->InsertData('mahasiswa', array(
				"nim" => "120987322",
				"nama" => "ucup",
				"alamat" => "bandung",
		));

		if($ins >= 1){
			echo "masuk";
		}
		else {
			echo "gagal";
		}
	}

	public function update()
	{
		$upd = $this->mymodel->UpdateData('mahasiswa', array(
				"alamat" => "Palembang Cuy",
		), array('nim'=> "120987322"));

		if($upd >= 1){
			echo "masuk";
		}
		else {
			echo "gagal";
		}
	}

	public function delete()
	{
		$del = $this->mymodel->DeleteData('mahasiswa', array('nim'=> "120987322"));

		if($del >= 1){
			echo "masuk";
		}
		else {
			echo "gagal";
		}
	}

}
	//http://localhost/codeigniter/index.php/welcome/cetak
	// welcome : nama classnya
	// cetak : nama functionnya
	// jadi url diatas mengakses kelas welcome dengan function cetak
	//-----------------------------------------------------------------------
	//http://localhost/codeigniter/index.php/welcome/cetak/ola
	//cetak/ola adalah function yang menerima 1 parameter yaitu ola untuk diolah
	//-------------------------------------------------------------------------
	//http://localhost/codeigniter/index.php/welcome/cetak/ola/tiara
	//cetak/ola/tiara : cetak memiliki 2 parameter, ia menerima ola(param 1) dan tiara(param 2)
	//-------------------------------------------------------------------------
	//public function cetak($satu=ola, $dua=tiara)
	//{
	//	echo $satu.'<br />';
	//	echo $dua.'<br />';
	//}
	//ola dan tiara sebagai nilai default apabila dari url tidak dimasukan parameter, agar tidak muncul eror
	//---------------------------------------------------------------------------
	//klo echo base_url() di welcome, dan di config telah disetting isi dari base url
	//lalu di autoload[helper] = array('url') maka hasil echo tadi adalah isi dari base url yang telah dimasukkan
	//--------------------------------------------------------------------------------------
	//$this->load->view('welcome_message');
	//mengakses view dengan nama welcome_message
	//isi view adalah HTML untuk menampilkan data dari controller
	//----------------------------------------------------------------------------
	//public function index()
	//{
	//	$data = array(
	//		'nama'=> 'febyola',
	//		'alamat'=>'palembang',
	//		'kampus'=> 'UI'
	//	);
	//	$this->load->view('welcome_message', $data);
	//}
	// mengirim data ke view welcome_message
	//-------------------------------------------------------------------------------------
	//model untuk operasi database
	//$data=$this->mymodel->GetMahasiswa();
	//mengambil data dari functon getmahasiswa di kelas mymodel
	//

