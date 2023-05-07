<?php

class Buku extends Controller
{
    public function index()
    {
        $data['title'] = 'Buku | PinBuk';
        $this->view('template/header', $data);
        $this->view('buku/index', $data);
        $this->view('template/footer');
    }
}
