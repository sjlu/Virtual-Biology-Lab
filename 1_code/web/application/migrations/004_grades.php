<?php

class Migration_grades extends CI_Migration {

	public function up()
   {
		$fields = array(
         'id' => array(
            'type' => 'INT',
            'constraint' => 5,
         ),
			'lab' => array(
				'type' => 'VARCHAR',
				'constraint' => '32',
			),
			'grade' => array(
				'type' => 'INT',
				'constraint' => 3,
			)
		);

      $this->dbforge->add_field($fields);
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('grades');
   }


   public function down()
   {
      $this->dbforge->drop_table('grades'); 
   }

}
