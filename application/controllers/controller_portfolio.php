<?php

class Controller_Portfolio extends Controller
{

    public function __construct()
    {
        $this->model = new Model_Portfolio();
        parent::__construct();
    }


    public function action_index()
    {
        $data = $this->model->getPortfolio();
        $this->view->generate('portfolio_view.php', $data);

    }

    public function action_single($url)
    {
        var_dump($url);
        $data = $this->model->getSinglePortfolio($url);
        $this->view->generate('single_portfolio_view.php', $data);
    }
}