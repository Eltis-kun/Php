<?php

class Controller_Services extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Services();
        parent::__construct();
    }


    public function action_index()
    {
        $data = $this->model->getServices();
        $this->view->generate('services_view.php', $data);

    }
}