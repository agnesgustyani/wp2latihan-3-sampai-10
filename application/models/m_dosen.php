<?php 

class m_dosen extends CI_Model 
{
    private $table = "dosen";
    private $primary = "nip";

    function showData() 
    {
        if (empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary, 'asc');
        else
            $this->db->order_by();
        return $this->db->get($this->table);
    }

    function delete($nip)
    {
        $this->db->where($this->primary, $nip);
        $this->db->delete($this->table);
        //DELETE FROM buku WHERE kd_buku = $kd_buku;
    }

    public function addData($data = null) 
    { 
       $this->db->insert('dosen', $data); 
    }

    function edit_data($where,$table)
    {		
	    return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table)
    {
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>