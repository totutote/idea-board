<?php

class Controller_Top extends Controller_Base
{

	public function action_index()
	{
		$this->template->title = 'Top &raquo; Index';
		$this->template->content = View::forge('top/index');
	}

	public function action_idealist()
	{
		$this->template->title = 'Top &raquo; idealist';
		$this->template->content = View::forge('top/idealist');
	}

	public function action_ideaMans()
	{
		$this->template->title = 'Top &raquo; idealist';
		$this->template->content = View::forge('top/idealist');
	}

	public function action_ideapost()
	{
		$this->template->title = 'Top &raquo; ideapost';
		$this->template->content = View::forge('top/ideapost');
	}

	public function action_postcomfilm()
	{
		$this->template->title = 'Top &raquo; idealist';
		$this->template->content = View::forge('top/idealist');
	}

}
