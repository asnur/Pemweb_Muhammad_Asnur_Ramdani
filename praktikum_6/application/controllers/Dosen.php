<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Rizki';
        $this->dsn1->nidn = '123456789';
        $this->dsn1->gender = 'L';
        $this->dsn1->tmp_lahir = 'Bogor';
        $this->dsn1->tgl_lahir = '2001-01-01';
        $this->dsn1->pendidikan = 'S2';
        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Lia';
        $this->dsn2->nidn = '123456789';
        $this->dsn2->gender = 'P';
        $this->dsn2->tmp_lahir = 'Bogor';
        $this->dsn2->tgl_lahir = '1999-01-01';
        $this->dsn2->pendidikan = 'S1';
        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nama = 'Dede';
        $this->dsn3->nidn = '123456789';
        $this->dsn3->gender = 'L';
        $this->dsn3->tmp_lahir = 'Semarang';
        $this->dsn3->tgl_lahir = '1994-01-01';
        $this->dsn3->pendidikan = 'S1';
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('dosen/index', $data);
    }
}
