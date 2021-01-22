<?php


if(isset($_POST['email']) && isset($_POST['password'])){

    if($_SESSION['users'] == $_POST['email'] ){

      foreach($_SESSION['users'] as $key => $password){

        if(password_verify($_POST['password'], $_SESSION['password']))
        {
            print_r($_SESSION);
            $_SESSION['connecté'] = $_SESSION['users'];
            echo "Authentification réussie !";
            echo 'vous êtes connecté : bienvenue mr'. $_SESSION['connecté'];
          }
        else
        {
            echo "vous êtes déconnecté";
          }
        }
      }
}

if(!file_exists("../logs/log_login.txt")){
  echo "Bienvenue sur la page de connexion !";
  echo "<br>" . "<br>";
  echo "[création du fichier log_login ...] ";
  echo "<br>" . "<br>";
}

if(file_exists("../logs/log_login.txt")){
  echo "Heureux de vous revoir !";
  echo "<br>" . "<br>";
  $logs = fopen("../logs/log_login.txt", "r+");
  $count = fgets($logs);
}
else{
  $logs = fopen("../logs/log_login.txt", 'a+');
}

if(!isset($_SESSION["connecté"]))
{

        $date =  'Unknown User à consulter la page le : ' . date("[j/m/y à H:i:s]")."  \r\n";
        fwrite($logs, $date);
}

else if (isset($_SESSION["connecté"])){
      $confirm_log = $_POST['email'] . ' à s.'.'estconnecté le : ' . date("[j/m/y à H:i:s]")."  \r\n";
      fwrite($logs, $confirm_log);
      print_r($_SESSION);

}

require '../Template/connexion.php';
?>
