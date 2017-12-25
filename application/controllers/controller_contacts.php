<?php

class Controller_Contacts extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Contacts();
        parent::__construct();
    }


    public function action_index()
    {
        $data = $this->model->getContacts();
        $this->view->generate('contacts_view.php', $data);

    }
}