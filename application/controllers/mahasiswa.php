<?php
class mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
    }
    function index()
    {
        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }

    function hapus($nim)
    {
        $this->m_mahasiswa->hapus($nim);

        $data['mahasiswa'] = $this->m_mahasiswa->tampilData()->result();
        $this->load->view('mahasiswa', $data);
    }
    function savingdata()
    {
        //this array is used to get fetch data from the view page.  
        $data = array(
            'nim'     => $this->input->post('nim'),
            'nama'  => $this->input->post('nama'),
            'jurusan'   => $this->input->post('jurusan'),
            'alamat' => $this->input->post('alamat')
        );
        //insert data into database table.  
        $this->m_mahasiswa->simpanData($data);
        redirect("mahasiswa/index");
    }
    function edit($nim)
    {
        $where = array('nim' => $nim);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'mahasiswa')->result();
        $this->load->view('edit_mahasiswa', $data);
    }
    function update()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'jurusan' => $jurusan,
            'alamat' => $alamat
        );

        $where = array(
            'nim' => $nim
        );

        $this->m_mahasiswa->update_data($where, $data, 'mahasiswa');
        redirect('mahasiswa/index');
    }
}