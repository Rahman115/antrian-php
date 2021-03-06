<?php

class LoginController extends Controller {

    public function index() {

        $login = isset($_SESSION["login"]) ? $_SESSION["login"] : '';
        if ($login) {
            $this->redirect("index.php");
        }

        $message = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = array(
                'success' => false,
                'message' => 'Maaf Username/Password salah.'
            );

            $username = isset($_POST["username"]) ? $_POST["username"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";

            if ($username == 'admin') {

                $this->model('user');

                $user = $this->user->getWhere(array(
                    'username' => $username,
                    'password' => md5($password)
                ));
            } else {
                $this->model('custom');
                
                $user = $this->custom->getWhere(array(
                    'username' => $username,
                    'password' => md5($password)
                ));
            }

            if (count($user) > 0) {
                $message = array(
                    'success' => TRUE,
                    'message' => 'Selamat, anda berhasil login'
                );

                $_SESSION["login"] = $user[0];

                echo '<meta http-equiv="refresh" content="1; url=index.php" >';
            }
        }

        $view = $this->view('login')->bind('message', $message);
    }

    public function logout() {
        unset($_SESSION["login"]);
        $this->redirect('index.php');
    }

}

?>