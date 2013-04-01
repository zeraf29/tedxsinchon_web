<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Talks extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$this->talkMain();
		
		///$this->load->view('welcome_message');
	}

	public function talkMain(){
		//$talkHeaderData['main_path'] = '/~Kyle/tedxsinchon_web';
		$talkHeaderData['main_path'] = './';
		$talkHeaderData['img_path'] = $talkHeaderData['main_path'].'img';
		$talkHeaderData['css_path'] = $talkHeaderData['main_path'].'css';
		$talkHeaderData['js_path'] = $talkHeaderData['main_path'].'js';
		$talkHeaderData['common_path'] = $talkHeaderData['main_path'].'common';


		$talkHeaderData['title'] = 'Talks << TEDxSinchon';
		$talkHeaderData['heading'] = 'Talks';

		$talkHeaderData['menu'] = array(
			$talkHeaderData['img_path'].'/talks/topmenu1.png',
			$talkHeaderData['img_path'].'/talks/topmenu2.png',
			$talkHeaderData['img_path'].'/talks/topmenu3.png',
			$talkHeaderData['img_path'].'/talks/topmenu4.png',
			);

		$this->load->view('talks/TalksHeader', $talkHeaderData);
		$this->load->view('talks/TalksMain');
		$this->load->view('talks/TalksFooter');
	
	}

	public function talks_view(){
		$this->load->view('index_cafe24');
		///
	}

	public function switchtest($what){
		if($what == 'welcome')
			$this->filetest();
		else if($what == 'cafe24')
			$this->kyletest();
		///
	}
}

// END Test class

/* End of file talks.php */
/* Location: ./controllers/talks.php */
