<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('queries');
		$posts=$this->queries->getPosts();
		$this->load->view('welcome_message',['posts'=>$posts]);
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($id){
			$this->load->model('queries');
		$post=$this->queries->getSinglePosts($id);
		$this->load->view('update',['post'=>$post]);
	}
	public function save(){
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('Description','Description','required');

		if($this->form_validation->run()){
			$data = $this->input->post();
			$today=date('Y-m-d');
			$data['date']=$today;
			unset($data['submit']);
			$this->load->model('queries');

			if($this->queries->addPost($data)){
					$this->session->set_flashdata('msg','Post Save Successfully!');
			}
			else{
				$this->session->set_flashdata('msg','Faild To Save Post!');
			}
			return redirect('welcome');
		}
		else{
			$this->load->view('create');
		}
	}
	public function change($id){
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('Description','Description','required');

		if($this->form_validation->run()){
			$data = $this->input->post();
			$today=date('Y-m-d');
			$data['date']=$today;
			unset($data['submit']);
			$this->load->model('queries');

			if($this->queries->updatePost($data,$id)){
					$this->session->set_flashdata('msg','Post Updated Successfully!');
			}
			else{
				$this->session->set_flashdata('msg','Faild To Update Post!');
			}
			return redirect('welcome');
		}
		else{
			$this->load->view('create');
		}
	}
	public function view($id){
			$this->load->model('queries');
		$post=$this->queries->getSinglePosts($id);
		$this->load->view('view',['post'=>$post]);
	}
	public function delete($id){
			$this->load->model('queries');
		if($this->queries->deletePost($id)){
			$this->session->set_flashdata('msg','Post Deleted Successfully!');
		}
		else{
			$this->session->set_flashdata('msg','Fail To Deleted Post!');
		}
		return redirect('welcome');
	}
} 
