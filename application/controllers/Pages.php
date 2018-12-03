<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pages extends CI_Controller {

	public function index() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
		$this->load->view('index');
    $this->load->view('template/footer');
	}

  public function tentang() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('tentang');
    $this->load->view('template/footer');
  }

  public function kosan() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('kosan');
    $this->load->view('template/footer');
  }

  public function berita() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('berita');
    $this->load->view('template/footer');
  }

  public function kontak() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('kontak');
    $this->load->view('template/footer');
  }

  public function detail() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('detail');
    $this->load->view('template/footer');
  }

  public function serba_serbi() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('serba-serbi');
    $this->load->view('template/footer');
  }
}
