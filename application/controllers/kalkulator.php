<?php
class kalkulator extends CI_Controller{
    public function index(){
        $data   = array(
            'judul' => 'Kalkulator',
            'hasil' => 0,
        );
        $this->load->view('contents/kalkulator_sederhana', $data);
    }
    public function olahdata(){
        $data   = array(
            'angkapertama'      => $this->input->post('angka1'),
            'angkakedua'        => $this->input->post('angka2'),
            'operasi'           => $this->input->post('operasi'),
            'judul' => 'Kalkulator',
            'hasil' => 0,
            
        );
        if ($data['angkapertama'] == "" || $data['angkakedua'] == "") {
            echo "<script>alert('tidak ada data');
            window.location.href='". base_url('kalkulator/index'). "';
            
            </script>";


        }
        elseif ($data['angkapertama'] || $data['angkakedua']) {
            switch ($data['operasi']) {
                case 'tambah':
                    $data['hasil'] = $data['angkapertama']  + $data['angkakedua'];
                    // echo $data['hasil'];
                    $this->load->view('contents/kalkulator', $data);
                    break;
                    case 'kurang':
                    $data['hasil'] = $data['angkapertama']  - $data['angkakedua'];
                    // echo $data['hasil'];
                    $this->load->view('contents/kalkulator', $data);
                    break;
                    case 'kali':
                    $data['hasil'] = $data['angkapertama'] * $data['angkakedua'];        
                    // echo $data['hasil'];
                    $this->load->view('contents/kalkulator', $data);
                    break;
                    case 'bagi':
                    $data['hasil'] = $data['angkapertama'] / $data['angkakedua'];
                    // echo $data['hasil'];
                    $this->load->view('contents/kalkulator', $data);
                    break;
                default:
                    echo "tidak ada data";
                    break;
            }

        }
    }
    public function kalkulatorsederhana(){
        $this->load->view('contents/kalkulator');
    }

}
?>