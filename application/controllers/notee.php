<?php
class Notee extends CI_Controller{
    public function index(){
        $data['page'] = 'contents/home'; // Menentukan halaman yang akan dimuat
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data); // Mengirimkan $data['page']
        $this->load->view('layout/footer');
    }
    
    public function about(){
        $data['page'] = 'contents/about'; // Halaman yang akan dimuat
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');
    }
    public function contact(){
        $data['page'] = 'contents/contact'; // Halaman yang akan dimuat
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');

    }
    public function nootes(){
        $data['note'] = $this->m_note->get_data();
        $data['page'] = 'contents/hasilnote'; // Halaman yang akan dimuat
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');

    }

    public function tambah() {
        $data['page'] = 'contents/tambahnote'; // Menampilkan form tambah data
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');
    }
    // public function TambahNote(){
    //     // menangkap data yang telah di post oleh form tambah
    //     $nama  = $this->input->post('nama');
    //     $judul = $this->input->post('judul');
    //     $isi   = $this->input->post('content');

    //     // mengubah ke array
    //     $form = array(
    //         'nama'      => $nama,
    //         'judul'     => $judul,
    //         'content'   => $isi,
    //     );
    //     //dimasukkan ke dalam model
    //     $this-> m_note->kirim_data($form, 'tb_note');
    //     //setelah kirim maka akan dikembalikan ke halaman nootes
    //     redirect('notee/nootes');
        
        
    // }

    //tambah data dengan foto
    public function TambahNote(){
        
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $content    = $this->input->post('content');
        $gambar     = $_FILES['gambar'];
        if(!$gambar === null){
            echo "Tidak ada file";
        }
        else{
            //configurasi untuk taruh foto
            $config['upload_path']      = './assets/uploads/';
            //configurasi untuk file yang diupload
            $config['allowed_types']         =  'jpg|png|jpeg';
            // $config['max_size']             =   2028;

            //load library
            $this->load->library('upload', $config);
            //dibawah, jika upload gagal, maka
            if(!$this->upload->do_upload('gambar')){
                echo "Gagal mengupload";die();
            }
            else{
                // jika berhasil maka akan diupload ke database
                $gambar= $this->upload->data('file_name');
            }
        }

        //menjadikan array
        $form = array(
            'nama'  => $nama,
            'judul' =>  $judul,
            'content'   => $content,
            'gambar'    => $gambar
        );
        $this->m_note->kirim_data($form, 'tb_note');
        redirect('notee/nootes');
    }
    
    // method digunakan menghapus data
    public function hapus($id){
        $dimana = array('id' => $id);
        
        $this->m_note->hapus_note($dimana, 'tb_note');
        //setelah kirim maka akan dikembalikan ke halaman nootes
        redirect('notee/nootes');
    }

    //method digunakan untuk mengedit data
    public function edit($id){
        $dimana = array('id' => $id);
        $data['note'] = $this->m_note->edit_data($dimana, 'tb_note') -> result_array();

        $this->load->view('layout/header');
        $data['page'] = 'contents/edit';
        // $this->load->view('contents/edit', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');

    }
    // edit data
    // public function update($id = null){
    //     $this->load->model('m_note');
    //     $id = $this-> input->post('id');
    //     if($id == null){
    //         show_error('ID tidak ditemukan!', 404);

    //     }
    //     $nama   = $this->input->post('nama');
    //     $judul = $this->input->post('judul');
    //     $content = $this->input->post('content');

    //     $datapost = array(
    //         'nama'      =>  $nama,
    //         'judul'     => $judul,
    //         'content'   => $content
    //     );

    //     $dimana = array(
    //         'id' => $id
    //     );

    //     $this->m_note->update_data($dimana, $datapost, 'tb_note');
    //     redirect ('notee/nootes');
    // }

    //edit data
    public function update($id = null ){
        $this->load->model('m_note');
        $id = $this->input->post('id');

        if($id == null){
            show_error('id tidak ditemukan',404);
        }
        //ambil data lama
        $data_lama = $this->m_note->getid('tb_note', ['id' => $id]);

        
        $nama = $this->input->post('nama');
        $judul = $this->input->post('judul');
        $content = $this->input->post('content');
        // $gambar = $_FILES['gambar'];

        $config['upload_path']  = './assets/uploads';
        $config['allowed_types'] = 'jpg|png|jpeg';

        // load library
        $this->load->library('upload', $config);

        $gambar_baru = $gambar_lama;

//jk pengguna uploadgambar baru 
if(!empty($_FILES['gambar']['name'])){
    if ($this->upload->do_upload('gambar')) {
        $uploadata = $this->upload->data();
        $gambar_baru = $uploadata['file_name'];

        //hapus gambar lama di folder
        if ($gambar_lama && file_exists('./assets/uploads/'. $gambar_lama)) {
            unlink('./assets/uploads/'. $gambar_lama);
        }
    }
    else{
        echo "Gagal mengupload gambar" . $this->upload->display_errors();
        die();
    }
}
        
        //menjadikan array
        $datapost = array(
            'nama'  => $nama,
            'judul' => $judul,
            'content'=> $content,
            'gambar'=> $gambar_baru,
        );
        $dimana = array(
            'id'    => $id,
            
        );
        $this->m_note->update_data($dimana,$datapost, 'tb_note');
        redirect('notee/nootes');
    }

    // detail data
    public function detail($id){
        $this->load->model('m_note');
        $dimana = array(
            'id' => $id
        );
        $data['data'] = $this->m_note->detail($dimana, 'tb_note');
        $data['page']   =  'contents/detail';  
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');
    }

    //contact
    public function tambahcon(){
        $this->load->model('m_contact');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $saran = $this->input->post('saran');
    
        $datapo= array(
            'nama' => $nama,
            'email' => $email,
            'saran' => $saran,
        );
        $this->m_contact->insertcon($datapo, 'tb_contact');
         redirect('notee/index');
        }

        // cari data
        public function cari(){
            $keyword   = $this->input->get('cari');
            $data['note'] = $this->m_note->caridata($keyword);
            $data['page']   =  'contents/hasilnote';  
        $this->load->view('layout/header');
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/footer');
        }

        // kalkulator
        // public function kalkulator(){
        //     $data   = array(
        //         'judul'     => 'Kalkulator',
        //         // 'page'      => 'contents/kalkulator',
        //     );
        //     // $this->load->view('layout/header');
        //     // $this->load->view('layout/navbar', $data);
        //     // $this->load->view('layout/footer');
        //     $this->load->view('contents/kalkulator', $data);
        // }
    
}

?>