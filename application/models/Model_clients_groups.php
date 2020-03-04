<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD:application/models/Model_store.php
<<<<<<< HEAD:application/models/Model_pos_ibi_taxes.php
class Model_pos_ibi_taxes extends MY_Model {
=======
class Model_clients_groups extends MY_Model {
>>>>>>> aletta:application/models/Model_clients_groups.php

	private $primary_key 	= 'ID_TAXE';
	private $table_name 	= 'pos_ibi_taxes';
	private $field_search 	= ['NAME_TAXE', 'DESCRIPTION_TAXE', 'RATE_TAXE', 'AUTHOR_TAXE'];
=======
class Model_store extends MY_Model {

	private $primary_key 	= 'ID_STORE';
	private $table_name 	= 'pos_ibi_stores';
	private $field_search 	= ['STATUT_STORE', 'NAME_STORE', 'IMAGE_STORE', 'DESCRIPTION_STORE', 'DATE_CREATION_STORE', 'DATE_MOD_STORE', 'AUTHOR_STORE'];
>>>>>>> jude:application/models/Model_store.php

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
	                $where .= "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' )";
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
	                $where .= "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_ibi_taxes.".$field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }
		
		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by('pos_ibi_taxes.'.$this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);

		return $query->result();
	}

    public function join_avaiable() {
        
        return $this;
    }

    public function filter_avaiable() {
<<<<<<< HEAD:application/models/Model_pos_ibi_taxes.php
        $this->db->where('AUTHOR_TAXE', get_user_data('id'));
=======
        $this->db->where('AUTHOR_STORE', get_user_data('id'));
>>>>>>> jude:application/models/Model_store.php
        
        return $this;
    }

}

<<<<<<< HEAD:application/models/Model_store.php
<<<<<<< HEAD:application/models/Model_pos_ibi_taxes.php
/* End of file Model_pos_ibi_taxes.php */
/* Location: ./application/models/Model_pos_ibi_taxes.php */
=======
/* End of file Model_store.php */
/* Location: ./application/models/Model_store.php */
>>>>>>> jude:application/models/Model_store.php
=======
/* End of file model_clients_groups.php */
/* Location: ./application/models/model_clients_groups.php */
>>>>>>> aletta:application/models/Model_clients_groups.php
