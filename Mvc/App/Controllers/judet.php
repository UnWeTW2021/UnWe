<?php

class Judet extends Controller{

    public function index($numeJudet = ''){
        #$user = $this->model('User');
        $this->view('grafice', $numeJudet);
    }

}
?>