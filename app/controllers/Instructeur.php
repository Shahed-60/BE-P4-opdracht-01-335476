<?php

class Instructeur extends BaseController
{

    private $instructeurModel;
    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }

    public function index()
    {

        $this->instructeurModel->getInstructeurs();
        $data = [
            'title' => 'Instructeurs in dienst'
        ];
        $this->view('instructeur/index', $data);
    }
}
