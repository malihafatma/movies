<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    /* Default method*/
	public function index()
	{
        //echo "Hello";
		$this->load->model('Article_model');
		$articles = $this->Article_model->articles();
		$data['articles'] = $articles;
		$this->load->helper('text');
		$string = "Here is a nice text string consisting of eleven words.";
		$data['string'] = $string;

		/*Custom test helper */
		$this->load->helper('common_helper');
		test_method();


		//print_r($articles);

		$this->load->view('articles', $data);

		/*how to use libraries */

		/*$this->load->library('form_validation');
		$this->form_validation->method_name();*/

		/* we can use libraries in array format */
		/*$this->load->library(array('form_validation','email'));

        /*$data = array();
        $name = 'Maliha';
        $data['name']= $name;
        $email = 'example@example.com';
        $data['email']= $email;
        $data['nameArray'] = array('Maliha','Fatma', 'Ansari');
		$articles= $this->Article_model->articles();
		$data['articleArray'] = $articles;
		$this->load->view('test', $data);

		#db

		$users= $this->Article_model->example();
		echo "<pre>";
		print_r($users);
		echo "</pre>";*/

		/* how to use helper*/
		/* Helper help us to use libraries without calling them*/

		//$this->load->helper('text');
		
		//$string = "Here is a nice text string consisting of eleven words.";
		//echo word_limiter($string, 4);


	}

	public function hello($par1)
	{
		echo "welcome";
		echo $par1;
		//$this->load->view('welcome_message');
	}


}


?>