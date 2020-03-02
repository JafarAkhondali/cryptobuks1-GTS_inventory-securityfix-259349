<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pos_store_2_categorie extends MY_Model {

	private $primary_key 	= 'categorie_id';
	private $table_name 	= 'pos_store_2_categorie';
	private $field_search 	= ['categorie_designation', 'categorie_user_id', 'categorie_type', 'categorie_date_creation', 'categorie_date_modification'];

	public function __construct()
	{
		$config = array(
			'primary_key' 	=> $this->primary_key,
		 	'table_name' 	=> $this->table_name,
		 	'field_search' 	=> $this->field_search,
		 );

		parent::__construct($config);
	}

	public function count_all($q = null, $field = null)
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	              

	                $where .= "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' OR CONCAT(aauth_users.full_name) LIKE '%".$q."%'";

	            } else {
	                $where .= "OR " . "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' )";
        }

		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
		$query = $this->db->get($this->table_name);

		return $query->num_rows();
	}

	public function get($q = null, $field = null, $limit = 0, $offset = 0, $select_field = [])
	{
		$iterasi = 1;
        $num = count($this->field_search);
        $where = NULL;
        $q = $this->scurity($q);
		$field = $this->scurity($field);

        if (empty($field)) {
	        foreach ($this->field_search as $field) {
	            if ($iterasi == 1) {
	                
	                $where .= "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' OR CONCAT(aauth_users.full_name) LIKE '%".$q."%'";
	            } else {
	                $where .= "OR " . "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_store_2_categorie.".$field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }
		
		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by('pos_store_2_categorie.'.$this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

    public function join_avaiable() {

    $this->db->join('aauth_users', 'aauth_users.id = pos_store_2_categorie.categorie_user_id', 'LEFT');
        
        
        return $this;
    }

    public function filter_avaiable() {
        
       // return $this;
    }

}

/* End of file Model_pos_store_2_categorie.php */
/* Location: ./application/models/Model_pos_store_2_categorie.php */