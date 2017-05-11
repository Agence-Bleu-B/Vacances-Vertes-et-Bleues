<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pub_model extends CI_Model
{
    public function get_pub(){
        $row = $this->db->select()
                    ->from('pubs')
                    ->where('active',1)
                    ->limit(2)
                    ->order_by('title', 'RANDOM')
                    ->get()
                    ->result_array();
        return $row;
    }

    public function get_all_pub(){
        $row = $this->db->select()
                    ->from('pubs')
                    ->get()
                    ->result_array();
        return $row;
    }

    public function update_active_pubs($active_list){
        $this->db->set('active', 0); //value that used to update column
        $this->db->update('pubs');

        foreach ($active_list as $id) {
            $this->db->set('active', 1); //value that used to update column
            $this->db->where('id', $id); //which row want to upgrade
            $this->db->update('pubs');
        }
    }

    public function new_pub($url,$file){
        $data = array(
        'file' => $file,
        'link' => $url
        );

        $this->db->insert('pubs', $data);
    }
}
