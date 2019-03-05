<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Comments extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Comments_model');
	}

	public function index(){

		if(!$this->dx_auth->is_admin()) {
			show_404();
		}

		$this->data['title'] = 'Все комментарии';
		$this->data['comments'] = $this->Comments_model->getCommentsAll();

		$this->load->view('templates/header', $this->data);
		$this->load->view('comments/index', $this->data);
		$this->load->view('templates/footer');
	}

	public function view($id = NULL) {

		$this->data['title'] = 'Просмотр комментариев';

		$this->data['comments_item'] = $this->Comments_model->getCommentsView($id);

		if (empty($this->data['comments_item'])) {
			show_404();
		}

		$this->data['name'] = $this->data['comments_item']['user_id'];
		$this->data['text'] = $this->data['comments_item']['comment_text'];

		$this->load->view('templates/header', $this->data);
		$this->load->view('comments/view', $this->data);
		$this->load->view('templates/footer');
	}

	public function delete($id = NULL){

		if(!$this->dx_auth->is_admin()) {
			show_404();
		}

		$this->load->model('Films_model');


		$this->data['comment_array'] = $this->Comments_model->getCommentsView($id);
		
		$this->data['id_movie'] = $this->data['comment_array']['movie_id'];

		$this->data['films_array'] = $this->Films_model->getFilmsForComments($this->data['id_movie']);

		$this->data['comments_delete'] = $this->Comments_model->deleteComments($id);


		if(empty($this->data['comments_delete'])) {
			show_404();
		}

		$this->data['title'] = "Удалить комментарий";
		$this->data['result'] = "Ошибка удаления ";

		if($this->Comments_model->deleteComments($id)) {
			$this->data['result'] = "Комментарий успешно удален";
		}

		$this->load->view('templates/header', $this->data);
		$this->load->view('comments/delete', $this->data);
		$this->load->view('templates/footer');
	}
}