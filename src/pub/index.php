<?php
require "waggo.php";

class PageIndex extends AppPCController
{
	public function models()
	{
		return ['post'];
	}

	public function init()
	{
		$this->model('post')->select();
	}

	public function input()
	{
		$this->pageCanvas->html = [
			'posts' => $this->model('post')->avars
		];

		return $this->defaultTemplate();
	}
}

PageIndex::START();
