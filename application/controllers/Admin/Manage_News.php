<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Manage_News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/News_model');
    }
    public function index($alert = NULL)
    {
        $data['alert'] = isset($alert) ? $alert : '';
        $data['title'] = 'Bài viết';
        $data['view'] = 'admin/news';
        $data['news'] = $this->News_model->GetNewsWithCategory();
        $this->load->view('admin/master_layout', $data, FALSE);
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $target_dir = "assets/images/news/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            $image = $target_file;
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $content = $this->input->post('content');
            $linkcustom = $this->input->post('linkcustom');
            $category = $this->input->post('category');

            $this->load->model('Admin/News_model');
            $result = $this->News_model->AddNews($name, $description, $content, $image, $linkcustom, $category);
            if ($result > 0) {
                $this->session->set_tempdata('add_alert', '<p class="success">Thêm thành công</p>', 1);
                redirect(base_url() . 'admin/news');
            } else {
                $this->session->set_tempdata('add_alert', '<p class="error">Thêm thất bại</p>', 1);
                redirect(base_url() . 'admin/news');
            }
        } else {
            $data['category'] = $this->News_model->GetNewsCategory();
            $data['view'] = 'admin/news_add';
            $this->load->view('admin/master_layout', $data, FALSE);
        }
    }

    public function delete()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');

            if ($this->News_model->DeleteNews($id)) {
                $data['response'] = "success";
            } else {
                $data['response'] = "error";
            }
        }
        echo json_encode($data);
    }
}
        
    /* End of file  News.php */