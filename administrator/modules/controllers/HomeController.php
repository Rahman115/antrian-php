<?php

use \modules\controllers\MainController;

class HomeController extends MainController {

    public function index() {

        $data = $_SESSION["login"];

        $this->model('calls');
        $this->model('poli');
        $this->model('custom');
        $this->model('pegawai');
        $this->template(
                'home', array('userData' => $data, 'total' => array(
                'calls' => $this->calls->rows(),
                'poli' => $this->poli->rows(),
                'custom' => $this->custom->rows(),
                'pegawai' => $this->pegawai->rows()
            ))
        );
    }

}

?>