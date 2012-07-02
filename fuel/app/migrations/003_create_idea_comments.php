<?php

namespace Fuel\Migrations;

class Create_idea_comments
{
	public function up()
	{
		\DBUtil::create_table('idea_comments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'idea_id' => array('constraint' => 11, 'type' => 'int'),
			'comment' => array('type' => 'txt'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('idea_comments');
	}
}