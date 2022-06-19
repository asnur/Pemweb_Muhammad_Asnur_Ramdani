<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '1234589';
        $this->mhs1->nama = 'Asnur Ramdani';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.95;
        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '987644';
        $this->mhs2->nama = 'Amelia Rahma';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.35;
        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('mahasiswa/index', $data);
    }
}
