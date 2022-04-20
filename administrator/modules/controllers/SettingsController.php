<?php

use \modules\controllers\MainController;

class SettingsController extends MainController {

    public function index() {

        $error = array();
        $success = NULL;

        $this->model('printer');
        $this->model('display');

        $dataPrinter = $this->printer->get();
        $dataDisplay = $this->display->get();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $type = isset($_POST['print_type']) ? $_POST['print_type'] : '';

            if ($type == 'print') {


                $name = isset($_POST['print_name']) ? $_POST['print_name'] : '';

                if ($name == '' || empty($name)) {
                    array_push($error, "Nama Printer tidak boleh kosong");
                }

                if ($error == NULL) {
                    $arr = array(
                        'ID' => '',
                        'PRINT_NAME' => $name,
                        'PRINT_STATUS' => 'N'
                    );

                    $insert = $this->printer->insert($arr);
                    if ($insert) {
                        $success = "Data Printer berhasil ditambahkan";
                    }
                }
            }
        }

        $this->template('settings', array('dataPrint' => $dataPrinter, 'dataDisplay' => $dataDisplay, 'error' => $error, 'success' => $success));
    }

    public function poli() {
        $error = array();
        $success = null;

        $this->model('poli');

        $dataUpdatePoli = null;

        if (isset($_GET['id'])) {
            $id = isset($_GET['id']) ? $_GET['id'] : '';

            if ($id == '' || empty($id)) {
                array_push($error, "ID kosong");
            }

            if ($error == NULL) {
                $dataUpdatePoli = $this->poli->getWhere(array('ID' => $id));
            }
        }


        $dataPoli = $this->poli->get();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = isset($_POST['name_departemen']) ? $_POST['name_departemen'] : '';
            $code = isset($_POST['code_departemen']) ? $_POST['code_departemen'] : '';

            $id_post = isset($_POST['id_departemen']) ? $_POST['id_departemen'] : '';

            if ($name == '' || empty($name)) {
                array_push($error, "Nama Departemen tidak boleh kosong");
            }
            if ($code == '' || empty($code)) {
                array_push($error, "Code Departemen tidak boleh kosong");
            }

            if ($error == NULL) {
                if ($id_post == '' || empty($id_post)) {
                    $arr = array(
                        'ID' => '',
                        'KODE_POLI' => $code,
                        'NAMA_POLI' => $name
                    );

                    $insert = $this->poli->insert($arr);
                    if ($insert) {
                        $success = "Data telah tersimpan";
                    }
                } else {
                    $arr = array(
                        'KODE_POLI' => $code,
                        'NAMA_POLI' => $name
                    );

                    $update = $this->poli->update($arr, array('ID' => $id_post));
                    if ($update) {
                        $success = "Data telah tersimpan";
                    }
                }
            }
        }


        $this->template('settings_poli', array(
            'poli' => $dataPoli,
            'update' => $dataUpdatePoli[0],
            'error' => $error,
            'success' => $success
                )
        );
    }

    public function test_print() {

        $this->model('printer');
        $pr = $this->printer->getWhere(array('PRINT_STATUS' => 'Y'));

        $handle = printer_open($pr[0]->PRINT_NAME);

        printer_set_option($handle, PRINTER_MODE, 'RAW');
        printer_start_doc($handle);
        printer_start_page($handle);
        $line_1 = 'RS. Nurul Hikmah';
        $line_1a = 'No. Antrian';
        $line_2 = '1';
        $line_2a = 'POLI';
        $line_3 = 'NO NAME';
        $line_4 = date('Y-m-d H:i:s');


        $font = printer_create_font('Arial', 90, 50, 100, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_1, 150, 50);
        printer_draw_text($handle, $line_1a, 150, 140);

        $font = printer_create_font('Arial', 400, 160, 1200, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_2, 150, 250);
        $font = printer_create_font('Arial', 100, 50, 200, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_2a, 150, 600);

        $font = printer_create_font('Arial', 70, 50, 100, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_3, 150, 700);
        printer_draw_text($handle, $line_4, 200, 770);

        printer_delete_font($font);
        printer_end_page($handle);
        printer_end_doc($handle);
        printer_close($handle);

        $this->back();
    }

    public function change_print_status() {

        $id = isset($_GET['id']) ? $_GET['id'] : '0';

        if ($id = '' || empty($id)) {
            $this->back();
        } else {
            $this->model('printer');
            $data = $this->printer->get();
            $dataSelect = $this->printer->getWhere(array('ID' => $_GET['id']));

//            var_dump($dataSelect[0]->ID);

            for ($i = 0; $i < count($data); $i++) {
                if ($dataSelect[0]->ID == $data[$i]->ID) {
                    $arr = array('PRINT_STATUS' => 'Y');
                    $this->printer->update($arr, array('ID' => $dataSelect[0]->ID));
                } else {
                    $arr = array('PRINT_STATUS' => 'N');
                    $this->printer->update($arr, array('ID' => $data[$i]->ID));
                }
            }
            $this->back();
        }
    }

    public function pegawai() {
        $error = array();
        $success = null;

        $this->model('pegawai');
        $this->model('custom');
        $this->model('poli');

        $dataUser = $this->pegawai->get();
        $dataPoli = $this->poli->get();
        $dataCustom = $this->custom->getJoin('master_poli', array('id_dep' => 'master_poli.ID'), "JOIN");


        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_poli = isset($_POST['departemen']) ? $_POST['departemen'] : '';
            $id_custom = isset($_POST['custom_name']) ? $_POST['custom_name'] : '';

            if ($id_poli == '' || empty($id_poli)) {
                array_push($error, "Data Poliharus dipilih");
            }
            if ($id_custom == '' || empty($id_custom)) {
                array_push($error, "Data Pegawai harus dipilih");
            }


            if ($error == NULL) {

                $dataInsertPoli = $this->poli->getWhere(array('ID' => $id_poli));
                $dataInsertPegawai = $this->pegawai->getWhere(array('ID' => $id_custom));


                $arr = array(
                    'id_custom' => '',
                    'id_dep' => $dataInsertPoli[0]->ID,
                    'id_user' => $dataInsertPegawai[0]->ID,
                    'nama' => $dataInsertPegawai[0]->NAMA_LENGKAP,
                    'counter' => $dataInsertPoli[0]->KODE_POLI,
                    'username' => $dataInsertPegawai[0]->USERNAME,
                    'password' => md5($dataInsertPegawai[0]->PASSWORD),
                    'status' => 'Y'
                );



                $ins = $this->custom->insert($arr);
                if ($ins) {
                    $success = "Data telah tersimpan";
                }
            }
        }


        $this->template('settings_custom', array(
            'custom' => $dataCustom,
            'poli' => $dataPoli,
            'user' => $dataUser,
            'error' => $error,
            'success' => $success
        ));
    }

    public function text() {
        $success = NULL;
        $error = array();
        
        $this->model('slidetext');

        $dataSlide = $this->slidetext->get();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $message = isset($_POST['text_message']) ? $_POST['text_message'] : '';
            $height = isset($_POST['text_height']) ? $_POST['text_height'] : '';
            $direction = isset($_POST['text_direction']) ? $_POST['text_direction'] : '';
            $align = isset($_POST['text_align']) ? $_POST['text_align'] : '';
            $behavior = isset($_POST['text_behavior']) ? $_POST['text_behavior'] : '';
            $width = isset($_POST['text_width']) ? $_POST['text_width'] : '';
            $scrollamount = isset($_POST['text_scrollamount']) ? $_POST['text_scrollamount'] : '';
//            $status = isset($_POST['text_status']) ? $_POST['text_status'] : '';

            $arr = array(
                'message' => $message,
                'height' => $height,
                'direction' => $direction,
                'align' => $align,
                'behavior' => $behavior,
                'width' => $width,
                'scrollamount' => $scrollamount,
                'status' => 'yes'
            );
            
            $upd = $this->slidetext->update($arr, array('id_text' => 1));
            if($upd) {
                $success = "Data berhasil disimpan";
            }
        }

        $this->template('settings_text', array('slide' => $dataSlide[0], 'slideAccess' => TRUE, 'error' => $error, 'success' => $success));
    }

    public function deletepoli() {
        $this->model('poli');

        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $delete = $this->poli->delete(array('ID' => $id));
        if ($delete) {
            $this->back();
        }
    }

}

?>