<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_departemen extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;

		$fields = array(
			'kode_departemen' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE,
			),
			'nama_departemen' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				
			),
			'tanggal_add' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
			'tanggal_edit' => array(
				'type' => 'datetime',
				'default' => '0000-00-00 00:00:00',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('kode_departemen', true);
		$this->dbforge->create_table('departemen');

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('departemen');

	}

	//--------------------------------------------------------------------

}