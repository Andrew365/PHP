<?php
Class Error extends controller{
    function __construct() {
        parent::__construct();
        echo 'This is an error';

        $this->view->render('error/index');
    }
}