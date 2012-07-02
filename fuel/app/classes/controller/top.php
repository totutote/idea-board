<?php

class Controller_Top extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Top &raquo; Index';
		$this->template->content = View::forge('top/index');
	}

	public function action_ranking()
	{
		$this->template->title = 'Top &raquo; Ranking';
		$this->template->content = View::forge('top/ranking');
	}

}
