<?php

class Migration_users extends CI_Migration {

	public function up()
   {
		$fields = array(
         'id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
            'auto_increment' => TRUE
         ),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => true,
			),
         'account_type' => array(
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ),
         'section_id' => array(
            'type' => 'INT',
            'constraint' => 5
         )
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
      $this->dbforge->add_key('username', TRUE);
		$this->dbforge->create_table('users');
   }


   public function down()
   {
      $this->dbforge->drop_table('users'); 
   }

}
