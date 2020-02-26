<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_proforma extends MY_Model {

	private $primary_key 	= 'ID_PROFORMA';
	private $table_name 	= 'pos_store_2_ibi_proforma';
	private $field_search 	= ['TITRE_PROFORMA', 'REF_CLIENT_PROFORMA', 'DATE_CREATION_PROFORMA', 'DATE_MOD_PROFORMA', 'AUTHOR_PROFORMA'];

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
	                $where .= "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' )";
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
	                $where .= "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' ";
	            } else {
	                $where .= "OR " . "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' ";
	            }
	            $iterasi++;
	        }

	        $where = '('.$where.')';
        } else {
        	$where .= "(" . "pos_store_2_ibi_proforma.".$field . " LIKE '%" . $q . "%' )";
        }

        if (is_array($select_field) AND count($select_field)) {
        	$this->db->select($select_field);
        }
		
		$this->join_avaiable()->filter_avaiable();
        $this->db->where($where);
        $this->db->limit($limit, $offset);
        $this->db->order_by('pos_store_2_ibi_proforma.'.$this->primary_key, "DESC");
		$query = $this->db->get($this->table_name);
        
		return $query->result();
	}

    public function join_avaiable() {
        $this->db->join('pos_ibi_clients', 'pos_ibi_clients.ID_CLIENT = pos_store_2_ibi_proforma.REF_CLIENT_PROFORMA', 'LEFT');
        
        return $this;
    }

    public function filter_avaiable() {
        // $this->db->where('AUTHOR', get_user_data('id'));
        
        return $this;
    }
    public function shuffle_code(){
            
            $randomString = '';
            $datemonth=date('m');
            $maxdate='/'.date('m').'/'.date('Y');

            $lastid = $this->db->query("SELECT LPAD(MAX(Maxcount)+1,5,0) as Maxcounts from (SELECT MAX(CAST(REPLACE(CODE_PROFORMA,'".$maxdate."','') AS UNSIGNED)) as Maxcount from pos_store_1_ibi_proforma p1 WHERE MONTH(p1.DATE_CREATION)='".$datemonth."' UNION  SELECT MAX(CAST(REPLACE(CODE_PROFORMA,'".$maxdate."','') AS UNSIGNED)) as Maxcount FROM pos_store_2_ibi_proforma p2 WHERE MONTH(p2.DATE_CREATION)='".$datemonth."')t");
            
            
             foreach ($lastid->result_array() as $key => $value) {
                
                if($value['Maxcounts']==NULL){
                    $Countmax="00001";
                }else{
                    $Countmax=$value['Maxcounts'];
                }
             }

            $date=date('Y-m-d');
            $annee=date("Y", strtotime($date));
            $mois=date("m", strtotime($date));


            $randomString = $Countmax.'/'.$mois.'/'.$annee;


        return $randomString;

    }
    public function random_code($length = 6)

    {

            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $charactersLength = strlen($characters);

            $randomString = '';

            for ($i = 0; $i < $length; $i++) {

                $randomString .= $characters[rand(0, $charactersLength - 1)];

            }

        return $randomString;

    }

}

/* End of file Model_registers.php */
/* Location: ./application/models/Model_registers.php */