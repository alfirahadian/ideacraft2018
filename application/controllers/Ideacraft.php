<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ideacraft extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('view_ideacraft');
	}

	public function news()
	{
			$this->load->view('view_news');
	}

	public function news_swa()
	{
			$this->load->view('view_news_swa');
	}

	public function news_marketingcoid()
	{
			$this->load->view('view_news_marketingcoid');
	}

	public function news_beritasatu()
	{
			$this->load->view('view_news_beritasatu');
	}

	public function news_kabar24()
	{
			$this->load->view('view_news_kabar24');
	}

	public function news_koranjakarta()
	{
			$this->load->view('view_news_koranjakarta');
	}

	public function news_cosmopolitan()
	{
			$this->load->view('view_news_cosmopolitan');
	}

	public function not_found()
	{
			$this->load->view('view_404');
	}




}
?>