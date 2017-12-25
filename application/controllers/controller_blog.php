<?php

class Controller_Blog extends Controller
{
    public function __construct()
    {
        $this->model = new Model_Blog();
        parent::__construct();
    }


    public function action_index()
    {
        $data = $this->model->getBlog();
        $this->view->generate('blog_view.php', $data);

    }

    public function action_single($url)
    {
        var_dump($url);
        $data = $this->model->getSingleBlog($url);
        $this->view->generate('single_blog_view.php', $data);
    }





}