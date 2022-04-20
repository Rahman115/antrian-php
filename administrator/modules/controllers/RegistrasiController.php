<?php

use modules\controllers\MainController;

class RegistrasiController extends MainController {

    public function index() {
        $this->regard();
        $data = $this->registrasi->get();
        $dataPasien = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $type = isset($_POST['search_type']) ? $_POST['search_type'] : '';
            $name = isset($_POST['search_name']) ? $_POST['search_name'] : '';

            $dataPasien = $this->pasien->getLike(array($type => $name), array('limit' => 100));
        }


//        var_dump($dataPasien);

        $this->template('registrasi', array('pasien' => $dataPasien, 'regis' => $data, 'access' => 'n'));
    }

    // fungsi registrasi
    public function reg() {
        // Deskripsi info access
        $error = array();
        $success = null;
        $pengunjung = null;

        $this->model('poli');

        $this->regard();

        $dataPoli = $this->poli->get();

        $call = $this->calls->get();

        // access pelanggan from id
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        if ($id == '' || empty($id) || $id == 0) {

            array_push($error, 'Cek ID anda kosong !!');
        }
        if ($error == null) {
            $pasien = $this->pasien->getWhere(array('ID' => $id));
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $REKAM_MEDIS = isset($_POST['id_reg']) ? $_POST['id_reg'] : '';
            $rujuk = isset($_POST['rujuk']) ? $_POST['rujuk'] : '';

            if ($REKAM_MEDIS == '' || empty($REKAM_MEDIS)) {
                array_push($error, 'ID tidak tersedia !!');
            }

            if ($rujuk == '' || empty($rujuk)) {
                array_push($error, 'Rujukan belum dipilih !!');
            }

            if ($error == NULL) {

                $setPoli = $this->poli->getWhere(array('ID' => $rujuk));

                $cnCalls = count($call);

                if ($cnCalls == 0) {


                    $codeDep = $setPoli[0]->KODE_POLI . "-" . 1;
                    $counter = $setPoli[0]->KODE_POLI;
                } else {


                    $arrFilterNoCalls = array();
                    $filterNo = 0;


                    for ($i = 0; $i < $cnCalls; $i++) {
                        $expCodeCalls = explode('-', $call[$i]->code_role);


                        if ($setPoli[0]->KODE_POLI == $expCodeCalls[0]) {
                            $setCodeCall = $call[$i]->code_role;
                            $expSetCodeCall = explode('-', $setCodeCall);
                            $arrFilterNoCalls[$filterNo] = $expSetCodeCall[1];
                        }
                    }

//                    $name_dep = $setDep[0]->park;
                    //var_dump($name_dep);
                    $noUrut = max($arrFilterNoCalls) + 1;


                    $codeDep = $setPoli[0]->KODE_POLI . "-" . $noUrut;
                    $counter = $setPoli[0]->KODE_POLI;
                }

                $arr = array(
                    'id_calls' => '',
                    'id_reg' => $REKAM_MEDIS,
                    'id_departemen' => $rujuk,
                    'code_role' => $codeDep,
                    'counter' => $counter,
                    'timers' => date('Y-m-d H:i:s'),
                    'status_call' => 'no'
                );

                // DATA PRINTER
                $this->model('pasien');
                $pasien = $this->pasien->getWhere(array('REKAM_MEDIS' => $REKAM_MEDIS));

                $insert = $this->calls->insert($arr);

                if ($insert) {
                    $r = array($noUrut, $setPoli[0]->NAMA_POLI, $pasien[0]->NAMA_PASIEN, $pasien[0]->REKAM_MEDIS );
                    $success = "Data telah tersimpan";
                    $this->page_print($r);
                }
            }
        }

        $this->template('registrasi_antrian', array(
            'title' => "REGISTRASI ANTRIAN",
            'poli' => $dataPoli,
            'error' => $error,
            'success' => $success,
            'antri' => $pasien[0]
                )
        );
    }

    public function info() {


        $this->regard();

        $id = isset($_GET['id']) ? $_GET['id'] : '0';

        $error = array();
        $success = NULL;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $id = isset($_POST['form_id']) ? $_POST['form_id'] : '';

            $rekam_medis = isset($_POST['form_rekam_medis']) ? $_POST['form_rekam_medis'] : '';
            $nama = isset($_POST['form_nama']) ? $_POST['form_nama'] : '';
            $nama_kk = isset($_POST['form_nama_kk']) ? $_POST['form_nama_kk'] : '';
            $titel_pasien = isset($_POST['form_titel_pasien']) ? $_POST['form_titel_pasien'] : '';
            $alamat = isset($_POST['form_alamat']) ? $_POST['form_alamat'] : '';
            $kelurahan = isset($_POST['form_kelurahan']) ? $_POST['form_kelurahan'] : '';
            $kecamatan = isset($_POST['form_kecamatan']) ? $_POST['form_kecamatan'] : '';
            $kota = isset($_POST['form_kota']) ? $_POST['form_kota'] : '';
            $propinsi = isset($_POST['form_propinsi']) ? $_POST['form_propinsi'] : '';
            $nomor_telepon = isset($_POST['form_nomor_telepon']) ? $_POST['form_nomor_telepon'] : '';
            $kode_pos = isset($_POST['form_kode_pos']) ? $_POST['form_kode_pos'] : '';
            $tempat_lahir = isset($_POST['form_tempat_lahir']) ? $_POST['form_tempat_lahir'] : '';
            $tanggal_lahir = isset($_POST['form_tanggal_lahir']) ? $_POST['form_tanggal_lahir'] : '';
            $jenis_kelamin = isset($_POST['form_jenis_kelamin']) ? $_POST['form_jenis_kelamin'] : '';
            $agama = isset($_POST['form_agama']) ? $_POST['form_agama'] : '';
            $kartu_identitas = isset($_POST['form_kartu_identitas']) ? $_POST['form_kartu_identitas'] : '';
            $nomor_identitas = isset($_POST['form_nomor_identitas']) ? $_POST['form_nomor_identitas'] : '';
            $status_marital = isset($_POST['form_status_marital']) ? $_POST['form_status_marital'] : '';
            $golongan_darah = isset($_POST['form_golongan_darah']) ? $_POST['form_golongan_darah'] : '';
            $tanggal_daftar = isset($_POST['form_tanggal_daftar']) ? $_POST['form_tanggal_daftar'] : date('Y-m-d');
            $status = isset($_POST['form_status']) ? $_POST['form_status'] : '';

            if ($nama == '' || empty($nama))
                array_push($error, "Nama Pasien tidak boleh kosong");
            if ($nama_kk == '' || empty($nama_kk))
                array_push($error, "Kepala Keluarga pasien tidak boleh kosong");
            if ($alamat == '' || empty($alamat))
                array_push($error, "Alamat tidak boleh kosong");

            if ($error == null) {
                $dataPasien = array(
                    'REKAM_MEDIS' => $rekam_medis,
                    'NAMA_PASIEN' => $nama,
                    'NAMA_KK' => $nama_kk,
                    'TITEL_PASIEN' => $titel_pasien,
                    'ALAMAT' => $alamat,
                    'KELURAHAN' => $kelurahan,
                    'KECAMATAN' => $kecamatan,
                    'KOTA' => $kota,
                    'PROPINSI' => $propinsi,
                    'NO_TELPON' => $nomor_telepon,
                    'KODE_POS' => $kode_pos,
                    'TEMPAT_LAHIR' => $tempat_lahir,
                    'TANGGAL_LAHIR' => $tanggal_lahir,
                    'JENIS_KELAMIN' => $jenis_kelamin,
                    'AGAMA' => $agama,
                    'KARTU_IDENTITAS' => $kartu_identitas,
                    'NO_IDENTITAS' => $nomor_identitas,
                    'STATUS_MARITAL' => $status_marital,
                    'GOLONGAN_DARAH' => $golongan_darah,
                    'TANGGAL_DAFTAR' => $tanggal_daftar,
                    'STATUS' => $status
                );

                $update = $this->pasien->update($dataPasien, array('ID' => $id));
                if ($update) {
                    $success = "Data telah tersimpan";
                }
            }
        }

        $dWhere = $this->pasien->getWhere(array('ID' => $id));

        $this->template('registrasi_new', array('regWhere' => $dWhere[0], 'title' => 'Ubah Data Pasien', 'medis' => $dWhere[0]->REKAM_MEDIS, 'error' => $error, 'success' => $success));
    }

    public function news() {
        $this->regard();
        $error = array();
        $success = null;

        $this->model('pasien');

        $idMedis = $this->pasien->getOrderBy(array('order' => array('ID' => 'DESC'), 'limit' => 1));

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $rekam_medis = isset($_POST['form_rekam_medis']) ? $_POST['form_rekam_medis'] : '';
            $nama = isset($_POST['form_nama']) ? $_POST['form_nama'] : '';
            $nama_kk = isset($_POST['form_nama_kk']) ? $_POST['form_nama_kk'] : '';
            $titel_pasien = isset($_POST['form_titel_pasien']) ? $_POST['form_titel_pasien'] : '';
            $alamat = isset($_POST['form_alamat']) ? $_POST['form_alamat'] : '';
            $kelurahan = isset($_POST['form_kelurahan']) ? $_POST['form_kelurahan'] : '';
            $kecamatan = isset($_POST['form_kecamatan']) ? $_POST['form_kecamatan'] : '';
            $kota = isset($_POST['form_kota']) ? $_POST['form_kota'] : '';
            $propinsi = isset($_POST['form_propinsi']) ? $_POST['form_propinsi'] : '';
            $nomor_telepon = isset($_POST['form_nomor_telepon']) ? $_POST['form_nomor_telepon'] : '';
            $kode_pos = isset($_POST['form_kode_pos']) ? $_POST['form_kode_pos'] : '';
            $tempat_lahir = isset($_POST['form_tempat_lahir']) ? $_POST['form_tempat_lahir'] : '';
            $tanggal_lahir = isset($_POST['form_tanggal_lahir']) ? $_POST['form_tanggal_lahir'] : '';
            $jenis_kelamin = isset($_POST['form_jenis_kelamin']) ? $_POST['form_jenis_kelamin'] : '';
            $agama = isset($_POST['form_agama']) ? $_POST['form_agama'] : '';
            $kartu_identitas = isset($_POST['form_kartu_identitas']) ? $_POST['form_kartu_identitas'] : '';
            $nomor_identitas = isset($_POST['form_nomor_identitas']) ? $_POST['form_nomor_identitas'] : '';
            $status_marital = isset($_POST['form_status_marital']) ? $_POST['form_status_marital'] : '';
            $golongan_darah = isset($_POST['form_golongan_darah']) ? $_POST['form_golongan_darah'] : '';

            if ($nama == '' || empty($nama))
                array_push($error, "Nama Pasien tidak boleh kosong");
            if ($nama_kk == '' || empty($nama_kk))
                array_push($error, "Kepala Keluarga pasien tidak boleh kosong");
            if ($alamat == '' || empty($alamat))
                array_push($error, "Alamat tidak boleh kosong");

            if ($error == null) {
                $dataPasien = array(
                    'ID' => NULL,
                    'REKAM_MEDIS' => $rekam_medis,
                    'NAMA_PASIEN' => $nama,
                    'NAMA_KK' => $nama_kk,
                    'TITEL_PASIEN' => $titel_pasien,
                    'ALAMAT' => $alamat,
                    'KELURAHAN' => $kelurahan,
                    'KECAMATAN' => $kecamatan,
                    'KOTA' => $kota,
                    'PROPINSI' => $propinsi,
                    'NO_TELPON' => $nomor_telepon,
                    'KODE_POS' => $kode_pos,
                    'TEMPAT_LAHIR' => $tempat_lahir,
                    'TANGGAL_LAHIR' => $tanggal_lahir,
                    'JENIS_KELAMIN' => $jenis_kelamin,
                    'AGAMA' => $agama,
                    'KARTU_IDENTITAS' => $kartu_identitas,
                    'NO_IDENTITAS' => $nomor_identitas,
                    'STATUS_MARITAL' => $status_marital,
                    'GOLONGAN_DARAH' => $golongan_darah,
                    'TANGGAL_DAFTAR' => date('Y-m-d'),
                    'STATUS' => 1
                );


                $insert = $this->pasien->insert($dataPasien);
                if ($insert) {
                    $success = "Data telah tersimpan";
                }
            }
        }
//                var_dump($idMedis);
        $id = $idMedis[0]->REKAM_MEDIS + 1;

        // $data = $this->registrasi->get();

        $this->template('registrasi_new', array(
            'title' => 'Tambah Data Pasien',
            'medis' => $id
        ));

//        $this->template('registrasi', array(
//            'regis' => $data,
//            'access' => 'info',
//            'headers' => "DAFTAR PENGUNJUNG BARU",
//            'error' => $error,
//            'success' => $success
//                )
//        );
    }

    // bank Model
    private function regard() {
        $this->model('registrasi');
        $this->model('calls');
        $this->model('departemen');
        $this->model('pasien');
    }

    private function page_print($arr = array()) {
        //      error_reporting(0);
        //    if(
        $handle = printer_open("Canon iP2700 series (Copy 2)"); //){
        printer_set_option($handle, PRINTER_MODE, 'RAW');
        printer_start_doc($handle);
        printer_start_page($handle);
        $line_1 = 'RSU. NURUSSYIFA';
        $line_1a = 'No. Antrian';
        $line_2 = $arr[0];
        $line_2a = $arr[1];
        $line_3 = $arr[2];
        $line_3a = 'RM:' . $arr[3];
        $line_4 = date('Y-m-d H:i:s');


        $font = printer_create_font('Arial', 90, 50, 100, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_1, 100, 50);
        printer_draw_text($handle, $line_1a, 150, 140);

        $font = printer_create_font('Arial', 400, 160, 1200, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_2, 150, 250);
        $font = printer_create_font('Arial', 100, 50, 200, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_2a, 150, 600);

        $font = printer_create_font('Arial', 60, 40, 90, FALSE, FALSE, FALSE, 0);
        printer_select_font($handle, $font);
        printer_draw_text($handle, $line_3, 90, 700);
        
        printer_draw_text($handle, $line_3a, 200, 770);
        printer_draw_text($handle, $line_4, 150, 840);

        printer_delete_font($font);
        printer_end_page($handle);
        printer_end_doc($handle);
        printer_close($handle);

//            $this->back();
//        } else {
//            echo "Gagal coneksi dengan printer";
//        }
    }

    public function getAjax() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dataSearch = isset($_POST['search']) ? $_POST['search'] : '';

            $this->model('pasien');

            $data = $this->pasien->getWhere(array('NAMA_PASIEN' => $dataSearch), array('limit' => 10));

            $this->template('ajax', array('dataAjax' => $data, 'sum' => count($data)));
        }
    }

}

?>