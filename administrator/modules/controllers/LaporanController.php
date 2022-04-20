<?php

use modules\controllers\MainController;

class LaporanController extends MainController {

    public function index() {

        $this->model('calls');
        $data_calls = $this->calls->get();
        $call_row = $this->calls->rows();

        $date = date('Y-m-d');

        for ($i = 0; $i < $call_row; $i++) {
            $exp = explode(" ", $data_calls[$i]->timers);
            if ($data_calls[$i]->code_role != '') {
                if ($exp[0] != $date) {
                    $arr = array(
                        'code_role' => '',
                        'counter' => ''
                    );

                    $this->calls->update($arr, array('id_calls' => $data_calls[$i]->id_calls));
                }
            }
        }






        $this->template('laporan', array('setDate' => $date, 'calls' => $data_calls, 'row' => $call_row));
    }

    public function laporan_mingguan() {
        $this->template('laporan_mingguan');
    }

    public function laporan_bulanan() {
        $this->template('laporan_bulanan');
    }

}

?>