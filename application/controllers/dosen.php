<?php 

class Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dosen');      
    }

    function index()
    {
        $data['dosen'] = $this->m_dosen->showData()->result();
        $this->load->view('dosen_view', $data);
    }

    function delete($nip)
    {
        $this->m_dosen->delete($nip);

        $data['dosen'] = $this->m_dosen->showData()->result();
        $this->load->view('dosen_view', $data);
    }

    function addData()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'nip'     => $this->input->post('nip'),  
                        'nama_dosen'  => $this->input->post('nama_dosen'),  
                        'bidang'   => $this->input->post('bidang'),  
                        'telp' => $this->input->post('telp')  
                        );  
        //insert data into table buku.  
        $this->db->insert('dosen',$data);  
  
        redirect("dosen/index");  
    }

    function edit($nip)
    {
        $where = array('nip' => $nip);
        $data['dosen'] = $this->m_dosen->edit_data($where, 'dosen')->result();
        $this->load->view('update_dosen_view', $data);
    }

    function update()
    {
        $nip = $this->input->post('nip');
        $nama_dosen = $this->input->post('nama_dosen');
        $bidang = $this->input->post('bidang');
        $telp = $this->input->post('telp');

        $data = array(
            'nama_dosen' => $nama_dosen,
            'bidang' => $bidang,
            'telp' => $telp
        );

        $where = array(
            'nip' => $nip
        );

        $this->m_dosen->update_data($where, $data, 'dosen');
        redirect('dosen/index');
    }

    
}

    

?>