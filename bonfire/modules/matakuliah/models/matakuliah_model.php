<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Matakuliah_model extends BF_Model {

	protected $table		= "matakuliah";
	protected $key			= "kode_matakuliah";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= true;
	protected $set_modified = true;
	protected $created_field = "tanggal_add";
	protected $modified_field = "tanggal_edit";
    protected $log_user     = TRUE;
    protected $created_by_field  =   'kode_pengguna_add';
    protected $modified_by_field = 'kode_pengguna_edit';
   
    
   function get_id_max($key='')
   {
        $this->select('max(kode_matakuliah) as id');
        $this->where("kode_matakuliah like '$key%'");
        return $this->find_all(); 
   }
}
