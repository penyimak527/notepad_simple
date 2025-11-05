<?php
class Notepad extends CI_Controller{
    public function index(){
        $bungkus['note'] = $this->m_note->get_data();

        // $this->load->view('layout/header');
        // $this->load->view('layout/navbar');
        // $this->load->view('layout/footer');
        $this->load->view('contentnote');
        
    }
    
    public function about(){
        $this->load->view('layout/about');
        
    }
    //membaca data yang ada  di database
    public function hasil(){
        $this-> load->model('m_note');
        
        $bungkus['note'] = $this->m_note->get_data(); 
        
        $this->load->view('layout/hasilnote', $bungkus); 
        
    }
    
    public function notes(){
        $bungkus['note'] = $this->m_note->get_data();
        $this->load->view('contents/notepad' , $bungkus);
    }
    
    
    // membuat data baru
    public function tambah(){
        $this->load->model('m_note');
        $bungkus['note'] = $this->m_note->post_data();
        $this->load->view('layout/tambahnote' , $bungkus);
    }
}
?>