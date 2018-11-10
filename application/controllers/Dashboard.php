<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url', 'language'));
		$this->load->library('ion_auth');
		$this->data = '';
	    if (!$this->ion_auth->logged_in()) {
	      redirect('auth/login', 'refresh');
	    }
	}

	public function index() {
		// add breadcrumbs
		$this->breadcrumbs->push('Dashboard', '/dashboard');
		$this->_render_page('admin/dashboard');
	}

	/**
	 * @param string     $view
	 * @param array|null $data
	 * @param bool       $returnhtml
	 *
	 * @return mixed
	 */
	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}



}