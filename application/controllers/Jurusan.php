<?php

require APPPATH . '/libraries/REST_Controller.php';

class jurusan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data mahasiswa
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $jurusan = $this->db->get('jurusan')->result();
        } else {
            $this->db->where('id', $id);
            $jurusan = $this->db->get('jurusan')->result();
        }
        $this->response($jurusan, 200);
    }
}