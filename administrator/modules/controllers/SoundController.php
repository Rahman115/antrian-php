<?php

use \modules\controllers\MainController;

class SoundController extends MainController {

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
            'loket' => "loket.MP3"
        );

        $this->template('sound', array('test' => "Hello world", 'fileSound' => $fileSound));
    }

}

?>