<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home | PinBuk';
        $data['nama'] = 'affan';
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}
