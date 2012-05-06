<?php

class Migration_sections extends CI_Migration {

	public function up()
   {
		$fields = array(
         'id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
            'auto_increment' => TRUE
         ),
			'section_key' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
			)
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('sections');
   }


   public function down()
   {
      $this->dbforge->drop_table('sections'); 
   }

}
