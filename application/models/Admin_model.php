<?php
class Admin_model extends CI_MODEL{
    // delete data
        public function delete_data($table, $where){
            $this->db->where($where);
            $this->db->delete($table);
            return $this->db->affected_rows();
        }
    // delete data
    
    // add data
        public function add_data($table, $data){
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }
    // add data

    // edit data
        public function edit_data($table, $where, $data){
            $this->db->where($where);
            $this->db->update($table, $data);
            return $this->db->affected_rows();
        }
    // edit data

    // get one data
        public function get_one($table, $where){
            $this->db->from($table);
            $this->db->where($where);
            return $this->db->get()->row_array();
        }
    // get one data

    // get all data
        public function get_all($table, $where = "", $order = "", $urut = "ASC"){
            $this->db->from($table);
            if($where)
                $this->db->where($where);
            if($order)
                $this->db->order_by($order, $urut);
            return $this->db->get()->result_array();
        }

        public function get_all_group_by($table, $where = "", $group = ""){
            $this->db->from($table);
            if($where)
                $this->db->where($where);
            if($group)
                $this->db->group_by($group);
            return $this->db->get()->result_array();
        }

        public function get_all_like($table, $col, $like, $where, $orderby = "", $urut = "ASC"){
            $this->db->from($table);
            $this->db->like($col, $like);
            if($where) $this->db->where($where);
            if($orderby) $this->db->order_by($orderby, $urut);
            return $this->db->get()->result_array();
        }
    // get all data

    // username
        public function get_username_terakhir($tgl){
            $bulan = date("m", strtotime($tgl));
            $tahun = date("Y", strtotime($tgl));

            $this->db->select("substr(no_peserta, 5, 4) as id");
            $this->db->from("peserta");
            $this->db->where("YEAR(tgl_daftar) = $tahun");
            $this->db->order_by("id", "DESC");
            return $this->db->get()->row_array();
        }
    // username terakhir 

    public function rupiah_to_int($data){
        $data = str_replace("Rp. ", "", $data);
        $data = str_replace(".", "", $data);
        return $data;
    }

    public function rupiah($angka){           
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
}