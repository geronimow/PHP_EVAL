<?php

if(!file_exists("../logs/log_register.txt")){

  echo "Bienvenue sur la page d'enregistrement !";
  echo "<br>" . "<br>";
  echo "[création du fichier log_register ...] ";
  echo "<br>" . "<br>";
}

if(file_exists("../logs/log_register.txt")){
  $logs = fopen("../logs/log_register.txt", "r+");
}
else{
  $logs = fopen("../logs/log_register.txt", 'a+');
}


if(!isset($_POST['email']) && !isset($_POST['password']) ){
  echo "Vous n'avez pas créer de compte !";
}
  if(isset($_POST['email']) && isset($_POST['password']) ){

    if(strlen($_POST['email']) > 8 && strlen($_POST['password']) > 8){


        $email = $_POST['email'];


        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        if(!isset($_SESSION['users'])){
            $_SESSION['users'] =[];
        }

        array_push($_SESSION['users'], ['password' => $password, 'email' => $email]);

        echo "Vous avez créer un compte ! ";

        $create_log = $_POST['email'] . ' à créer un compte le : ' . date("[j/m/y à H:i:s]")."  \r\n";
        fwrite($logs, $create_log);
        print_r($_SESSION);
    }
}

if(!isset($_SESSION["users"]))
{
  $date = 'Unkown User à consulter la page le : ' . date("[j/m/y à H:i:s]")."  \r\n";
  fwrite($logs, $date);
}

fclose($logs);
echo "<br>";

require '../Template/register.php';
 ?>
