<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('add_notice_model');
    }





public function index_get() {
        $notices = $this->Notice_model->get_all_notices();
        if ($notices) {
            $this->response($notices, REST_Controller::HTTP_OK);
        } else {
            $this->response(['message' => 'No notices found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post() {
        // Create a new notice
        $data = array(
            'title' => $this->post('title'),
            'category' => $this->post('category'),
            'description' => $this->post('description'),
            'thumbnail' => $this->post('thumbnail')
        );

        $notice_id = $this->Notice_model->create_notice($data);
        $this->response(['id' => $notice_id], REST_Controller::HTTP_CREATED);
    }

    public function index_put($id) {
        // Update a notice
        $data = array(
            'title' => $this->put('title'),
            'category' => $this->put('category'),
            'description' => $this->put('description'),
            'thumbnail' => $this->put('thumbnail')
        );

        $result = $this->Notice_model->update_notice($id, $data);
        if ($result) {
            $this->response(['message' => 'Notice updated successfully'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['message' => 'Notice not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete($id) {
        // Delete a notice
        $result = $this->Notice_model->delete_notice($id);
        if ($result) {
            $this->response(['message' => 'Notice deleted successfully'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['message' => 'Notice not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
