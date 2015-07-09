
<?php

Class Index extends controller{

    function __construct() {
        parent::__construct();
        echo 'We are in index';
    }

    public function greet ($x = false){

        echo ' You have been greeted';
    }

}
