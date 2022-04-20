<?php

use \modules\controllers\MainController;

class CallsController extends MainController {

    public function index() {
        $fileSound = array(
            'in' => "in.wav",
            'out' => "out.wav",
            'suarabel' => "Airport_Bell.mp3",
            'suarabelnomorurut' => "nomor-urut.MP3",
            'suarabelsuarabelloket' => "konter.MP3",
            'belas' => "belas.MP3",
            'sebelas' => "sebelas.MP3",
            'puluh' => "puluh.MP3",
            'sepuluh' => "sepuluh.MP3",
            'ratus' => "ratus.MP3",
            'seratus' => "seratus.MP3",
            'suarabelloket1' => "1.MP3",
            'suarabelloket2' => "2.MP3",
            'suarabelloket3' => "3.MP3",
            'suarabelloket4' => "4.MP3",
            'suarabelloket5' => "5.MP3",
            'suarabelloket6' => "6.MP3",
            'suarabelloket7' => "7.MP3",
            'suarabelloket8' => "8.MP3",
            'suarabelloket9' => "9.MP3",
            'suarabelloket10' => "sepuluh.MP3",
            'loket' => "loket.MP3",
            'p1' => 'POL01.mp3',
            'p2' => 'POL02.mp3',
            'p3' => 'POL03.mp3',
            'p4' => 'POL04.mp3',
            'p5' => 'POL05.mp3',
            'p6' => 'POL06.mp3',
            'p7' => 'POL07.mp3',
            'p8' => 'POL08.mp3',
            'p9' => 'POL09.mp3',
            'p10' => 'POL10.mp3',
            'p11' => 'POL11.mp3',
            'p12' => 'POL12.mp3',
            'p13' => 'POL13.mp3',
            'p14' => 'POL14.mp3'
        );


        $this->model('calls');
        $this->model('custom');
        $this->model('departemen');
        $this->model('poli');

        if ($_SESSION["login"]->username != 'admin') {

            $data = $this->calls->getJoin(array('master_poli', 'master_pasien'), array('calls.id_reg' => 'master_pasien.REKAM_MEDIS', 'calls.id_departemen' => 'master_poli.ID'), "JOIN", array('calls.id_departemen' => $_SESSION['login']->id_dep));
            $dataNew = $this->custom->getJoin(
                    'master_poli', array('custom.id_dep' => 'master_poli.ID'), "JOIN", array('custom.id_custom' => $_SESSION['login']->id_custom)
            );
            $dataNewCallPemakai = $dataNew[0];
            $newCallAll = FALSE;
//            var_dump($data);
        } else {

            $data = $this->calls->getJoin(array('master_poli', 'master_pasien'), array('calls.id_reg' => 'master_pasien.REKAM_MEDIS', 'calls.id_departemen' => 'master_poli.ID'), "JOIN");
            $dataNewCallPemakai = $this->custom->getJoin(
                    'master_poli', array('custom.id_dep' => 'master_poli.ID'), "JOIN"
            );

            $newCallAll = TRUE;
        }
        // $this->model()
        //$data = $this->calls->get();


        $dataNewCallDepartemen = $this->departemen->get();

//        var_dump($dataNewCallPemakai);

        $this->template('calls', array(
            'callAll' => $data,
            'newCallAll' => $newCallAll,
            'fileSound' => $fileSound,
            'call' => array(
                'callCustom' => $dataNewCallPemakai,
                'callDep' => $dataNewCallDepartemen
            )
                )
        );
    }

    public function update_antrian() {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $this->model('calls');

        $dataUpdate = array('status_call' => 'yes');
        $update = $this->calls->update($dataUpdate, array('id_calls' => $id));

        if ($update) {
            $this->back();
        }
    }

    public function recall() {
        $this->back();
    }

    public function delay() {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $this->model('calls');

        $dataUpdate = array('status_call' => 'delay');

        $update = $this->calls->update($dataUpdate, array('id_calls' => $id));

        if ($update) {
            $this->back();
        }
    }

}

?>
