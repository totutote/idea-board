<?php

namespace Fuel\Migrations;

class Create_user_points
{
	public function up()
	{
		\DBUtil::create_table('user_points', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'idea_id' => array('constraint' => 11, 'type' => 'int'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('user_points');
	}
}