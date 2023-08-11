<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	private $data;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('GoogleSheetsModel');
		$dataKota = $this->GoogleSheetsModel->getDataKota();
		$dataBidang = $this->GoogleSheetsModel->getDataBidang();
		$dataSubBidang = $this->GoogleSheetsModel->getDataSubBidang();
		$dataKppn = $this->GoogleSheetsModel->getDataKppn();

		$dataDesa = $this->GoogleSheetsModel->getDataDesa();
		$dataKabupaten = $this->GoogleSheetsModel->getDataKabupaten();

		$dataDBH = $this->GoogleSheetsModel->getDBH();
		$dataDAU = $this->GoogleSheetsModel->getDAU();

		$dataBO = $this->GoogleSheetsModel->getBO();

		$this->data = [
			'dataKota' => $dataKota,
			'dataBidang' => $dataBidang,
			'dataSubBidang' => $dataSubBidang,
			'dataKppn' => $dataKppn,
			'dataDesa' => $dataDesa,
			'dataKabupaten' => $dataKabupaten,
			'dataDAU' => $dataDAU,
			'dataBO' => $dataBO,
			'dataDBH' => $dataDBH
		];
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['active'] = 'dashboard';
		$this->load->view('header/template', $data);
		$this->load->view('dashboard');
	}

	public function sulawesi_utara()
	{
		$data['title'] = 'Per Daerah | Sulawesi Utara';
		$data['active'] = 'sulawesi_utara';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/sulawesi_utara');
	}

	public function kabMinahasa()
	{
		$data['title'] = 'Per Daerah | Kab. Minahasa';
		$data['active'] = 'kabMinahasa';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabMinahasa');
	}

	public function kabMinahasa_Sel()
	{
		$data['title'] = 'Per Daerah | Kab. Minahasa Selatan';
		$data['active'] = 'kabMinahasa_Sel';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabMinahasa_Sel');
	}

	public function kabMinahasa_Teng()
	{
		$data['title'] = 'Per Daerah | Kab. Minahasa Tenggara';
		$data['active'] = 'kabMinahasa_Teng';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabMinahasa_Teng');
	}

	public function kota_manado()
	{
		$data['title'] = 'Per Daerah | Kota Manado';
		$data['active'] = 'kota_manado';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kota_manado');
	}

	public function kota_tomohon()
	{
		$data['title'] = 'Per Daerah | Kota Tomohon';
		$data['active'] = 'kota_tomohon';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kota_tomohon');
	}

	public function kabKep_sangihe()
	{
		$data['title'] = 'Per Daerah | Kab. Kep. Sangihe';
		$data['active'] = 'kabKep_sangihe';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabKep_sangihe');
	}

	public function kabKep_sitaro()
	{
		$data['title'] = 'Per Daerah | Kab. Kep. Sitaro';
		$data['active'] = 'kabKep_sitaro';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabKep_sitaro');
	}

	public function kabBol_mongondow()
	{
		$data['title'] = 'Per Daerah | Kab. Bolaang Mongondow';
		$data['active'] = 'kabBol_mongondow';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabBol_mongondow');
	}

	public function kabBol_mong_utara()
	{
		$data['title'] = 'Per Daerah | Kab. Bol. Mong. Utara';
		$data['active'] = 'kabBol_mong_utara';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabBol_mong_utara');
	}

	public function kabBol_mong_selatan()
	{
		$data['title'] = 'Per Daerah | Kab. Bol. Mong. Selatan';
		$data['active'] = 'kabBol_mong_selatan';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabBol_mong_selatan');
	}

	public function kabBol_mong_timur()
	{
		$data['title'] = 'Per Daerah | Kab. Bol. Mong. Timur';
		$data['active'] = 'kabBol_mong_timur';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabBol_mong_timur');
	}

	public function kota_Kotamobagu()
	{
		$data['title'] = 'Per Daerah | Kota Kotamobagu';
		$data['active'] = 'kota_Kotamobagu';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kota_Kotamobagu');
	}

	public function kabKep_talaud()
	{
		$data['title'] = 'Per Daerah | Kab. Kepulauan Talaud';
		$data['active'] = 'kabKep_talaud';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabKep_talaud');
	}

	public function kabMina_Utara()
	{
		$data['title'] = 'Per Daerah | Kab. Minahasa Utara';
		$data['active'] = 'kabMina_Utara';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kabMina_Utara');
	}

	public function kota_bitung()
	{
		$data['title'] = 'Per Daerah | Kota Bitung';
		$data['active'] = 'kota_bitung';
		$this->load->view('header/template', $data);
		$this->load->view('perdaerah/kota_bitung');
	}

	public function kppn_manado()
	{
		$data['title'] = 'KPPN | Manado';
		$data['active'] = 'kppn_manado';
		$this->load->view('header/template', $data);
		$this->load->view('kppn/kppn_manado');
	}

	public function kppn_tahuna()
	{
		$data['title'] = 'KPPN | Tahuna';
		$data['active'] = 'kppn_tahuna';
		$this->load->view('header/template', $data);
		$this->load->view('kppn/kppn_tahuna');
	}

	public function kppn_kotamobagu()
	{
		$data['title'] = 'KPPN | Kotamobagu';
		$data['active'] = 'kppn_kotamobagu';
		$this->load->view('header/template', $data);
		$this->load->view('kppn/kppn_kotamobagu');
	}

	public function kppn_bitung()
	{
		$data['title'] = 'KPPN | Bitung';
		$data['active'] = 'kppn_bitung';
		$this->load->view('header/template', $data);
		$this->load->view('kppn/kppn_bitung');
	}

	public function dana_desa()
	{
		$data = [];
		$data['dataDesa'] = $this->data['dataDesa'];
		$data['dataKabupaten'] = $this->data['dataKabupaten'];
		$data['title'] = 'Dashboard | Dana Desa';
		$data['active'] = 'dana_desa';
		$this->load->view('header/template', $data);
		$this->load->view('dana_desa');
	}

	public function dbh()
	{
		$data = [];
		$data['dataDBH'] = $this->data['dataDBH'];
		$data['title'] = 'Dashboard | DBH';
		$data['active'] = 'dbh';
		$this->load->view('header/template', $data);
		$this->load->view('dbh', $data);
	}

	public function dau()
	{
		$data = [];
		$data['dataDAU'] = $this->data['dataDAU'];
		$data['title'] = 'Dashboard | DAU';
		$data['active'] = 'dau';
		$this->load->view('header/template', $data);
		$this->load->view('dau', $data);
	}

	public function bantuan_operasional()
	{
		$data = [];
		$data['dataBO'] = $this->data['dataBO'];
		$data['title'] = 'Dashboard | Bantuan Operasional';
		$data['active'] = 'bo';
		$this->load->view('header/template', $data);
		$this->load->view('bantuan_operasional', $data);
	}

	public function dak_fisik()
	{
		$data = [];
		$data['dataKota'] = $this->data['dataKota'];
		$data['dataBidang'] = $this->data['dataBidang'];
		$data['dataSubBidang'] = $this->data['dataSubBidang'];
		$data['dataKppn'] = $this->data['dataKppn'];
		$data['title'] = 'Dashboard | DAK Fisik';
		$data['active'] = 'dak_fisik';
		$this->load->view('header/template', $data);
		$this->load->view('dak_fisik', $data);
	}

	public function dashboard_laporan()
	{
		$data = [];
		$data['dataDashLap'] = $this->data['dataDashLap'];
		$data['title'] = 'Dashboard | Laporan';
		$data['active'] = 'dl';
		$this->load->view('header/template', $data);
		$this->load->view('dashboard_laporan', $data);
	}
}
