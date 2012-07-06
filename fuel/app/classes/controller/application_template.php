<?php

/**
 * The Application Controller.
 *
  * @package  app
 * @extends  Controller_Template
 */
abstract class Controller_Application extends Controller_Template
{

	public function before()
	{
	    parent::before(); // この行がないと、テンプレートが動作しません!
	}

	public function action_index()
	{
	    // ダッシュボードをロード
	}

	public function action_login()
	{
	    // ユーザをログイン
	}

}
