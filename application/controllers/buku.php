<?php 

class Buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_buku');      
    }

    function index()
    {
        $data['buku'] = $this->m_buku->showData()->result();
        $this->load->view('buku_view', $data);
    }

    function delete($kd_buku)
    {
        $this->m_buku->delete($kd_buku);

        $data['buku'] = $this->m_buku->showData()->result();
        $this->load->view('buku_view', $data);
    }

    function addData()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'kd_buku'     => $this->input->post('kd_buku'),  
                        'judul'  => $this->input->post('judul'),  
                        'pengarang'   => $this->input->post('pengarang'),  
                        'jenis' => $this->input->post('jenis')  
                        );  
        //insert data into table buku.  
        $this->db->insert('buku',$data);  
  
        redirect("buku/index");  
    }

    function edit($kd_buku)
    {
        $where = array('kd_buku' => $kd_buku);
        $data['buku'] = $this->m_buku->edit_data($where, 'buku')->result();
        $this->load->view('update_buku_view', $data);
    }

    function update()
    {
        $kd_buku = $this->input->post('kd_buku');
        $judul = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $jenis = $this->input->post('jenis');

        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'jenis' => $jenis
        );

        $where = array(
            'kd_buku' => $kd_buku
        );

        $this->m_buku->update_data($where, $data, 'buku');
        redirect('buku/index');
    }

    
}

    

?>