<?php

use \modules\controllers\MainController;

class HomeController extends MainController {

    public function index() {
        // view home yang sudah dimasukkan ke dalam template
        $this->model('slidetext');

        $this->model('calls');

        $dataSlide = $this->slidetext->get();
        $dataCalls = $this->calls->getJoin('master_poli', array('calls.id_departemen' => 'master_poli.ID'));

       

        $this->template('display', array('slide' => $dataSlide[0], 'calls' => $dataCalls));
    }

    public function display() {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $this->model('slidetext');

        $this->model('display');

        $this->model('poli');

        $this->model('calls');
//        var_dump($id);

        $dataSlide = $this->slidetext->get();
        $dataPoli = $this->poli->get();
        $dataDisplay = $this->display->get();
        $dataCalls = $this->calls->getJoin('master_poli', array('calls.counter' => 'master_poli.KODE_POLI'), "JOIN", array("status_call" => "yes"));

        $n = 0;
        $arrData = array();
        foreach ($dataPoli AS $val) {
            for ($i = 0; $i < count($dataCalls); $i++) {
                if ($val->KODE_POLI == $dataCalls[$i]->counter) {
                    $ex = explode("-", $dataCalls[$i]->code_role);
                    $arrData[$n] = [ 
                        'name' => $dataCalls[$i]->NAMA_POLI, 
                        'counter' => $dataCalls[$i]->counter, 
                        'antrian'=> $ex[1]
                    ];
                }
            }
            $n++;
        }
        
//        var_dump($dataCalls);
        
        $arr = array("result" =>$arrData);
        $JQuery = json_encode($arr);
        echo $JQuery;

//        $this->template('display', array('slide' => $dataSlide[0], 'calls' => $dataCalls, 'display' => $dataDisplay, 'poli'=> $dataPoli));
    }

}

?>