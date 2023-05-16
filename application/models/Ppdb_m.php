<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ppdb_m extends CI_Model{
    function sesuaikan($table,$where){
        return $this->db->get_where($table, $where)->result_array();
    }
} 
?>