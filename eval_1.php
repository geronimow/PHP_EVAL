<?php
 /* 1 - Déclarer une variable nommé 'discord' et contenant la valeur 'nsfw' */

$discord = 'nsfw';

/* 2 - Utiliser la fonction 'echo' pour afficher la valeur contenue dans la variable 'discord' suivi de deux retours a la ligne */

echo $discord . ' <br>  <br> ';

/* 3 - Déclarer une fonction appellée 'coucou' qui affiche 'Hello' suivi de deux retours a la ligne quand on l'execute */

function coucou(){
  echo "Hello <br>  <br>";
}

/* 4 - Executez la fonction 'coucou' */

coucou();


/* 5 - Déclarer une fonction 'my_print_uppercase' qui prends un parametre nommé 'string' et qui affiche
la valeur reçue en parametre en lettres majuscules suivi de deux retours a la ligne quand on l'execute,
       puis executez cette fonction en lui passant la valeur 'caps lock is cruise control for cool'. */

function my_print_uppercase($string){
  $string = strtoupper($string);
  echo $string . " <br> <br>";
}
my_print_uppercase('caps lock is cruise control for cool');

/* 6 - Déclarer une fonction qui prends en parametre une chaine de caractère et qui affiche 'OK' si la chaine
       recue en parametre est 'cool' et qui affiche 'KO' dans tout les autres cas, puis l'appeler une fois en lui
       passant la valeur 'pas cool' puis une seconde fois en lui passant la valeur 'cool'. Dans tout les cas la
       fonction devra afficher un retour a la ligne avant de se terminer. */

function print_char($string){
  if($string == 'cool'){
    echo 'OK <br> <br>';
    }
    else{
      echo 'KO <br> <br>';
  }
}
print_char('cool');
// print_char('pas cool'); //

/* 7 - Déclarer une fonction qui prends en parametre un tableau nommé 'mots' et qui affiche chacune des
       valeurs contenues dans le tableau en les séparant par des espaces, puis qui affiche deux retours a la
       ligne une fois toutes les valeurs affichées. Enfin, executez la fonction en lui passant le tableau
       suivant : ['Luke,','je','suis','ton','père']; */

$tab = ['Luke,','je','suis','ton','père'];
function tableau($mots){
  foreach($mots as $key){
    echo $key . ' ';
  }
  echo '<br> <br>';
}
tableau($tab);

/* 8 - Déclarer une fonction nommée my_max qui prends en parametre un tableau de chiffres et qui RENVOIE
       la plus grande valeur de ce tableau, puis l'appeler en lui passant le tableau suivant :
       $tab = [23, 42, 15, 16, 8, 4]; puis une seconde fois en lui passant le tableau suivant :
       $tab = [999, 42, 1337, 16, 4, 50]; Pour chaque appel, vous devez recuperer le resultat dans une
       variable $result, puis afficher la variable $result en utilisant echo() */

$tab = [23, 42, 15, 16, 8, 4];
$tab = [999, 42, 1337, 16, 4, 50];

function my_max($tableau){
for($i = 0; $i < count($tableau); $i++){
  if($i == 0){
    $result = $temp = $tableau[$i];
  }
  if($i > 0){
    if($tableau[$i] > $temp){
      $result = $tableau[$i];
    }
  }
}
  echo ($result) . ' <br> <br> ';
}
my_max($tab);

/* 9 - Déclarer une fonction nommée reverse_print qui prends un tableau en parametre et qui affiche une
       par une toutes ses valeurs suivi d'un retour a la ligne, mais dans l'ordre inverse du tableau
       (de la dernière valeur a la premiere valeur); puis executez cette fonction une fois en lui passant la
       valeur : $tab = [999, 42, 1337, 16, 4, 50]; et une seconde fois en lui passant la valeur :
       $tab = ['cinq', 'quatre', 'trois', 'deux, 'un']; */

$taba = [999, 42, 1337, 16, 4, 50];
 function reverse_print($tableau)
  {
   $tab2 = 0;
   while($tab2 != count($tableau))
   {
     $tab2 = 0;
     for($i=0; $i < count($tableau) ; $i++)
        {
          if(isset($tableau[$i+1]) && $tableau[$i] < $tableau[$i+1])
          {
            $temp = $tableau[$i+1];
            $tableau[$i+1] = $tableau[$i];
            $tableau[$i] = $temp;
           }
            else
            {
            $tab2++;
          }
        }
        foreach ($tableau as $key)
        {
          /* ? reverse_print($key); ? */
        }
        echo "<br>";
      }
      return $tableau;

}
print_r (reverse_print($taba));


/* 10 - Déclarer une fonction nommée 'best_even' qui prends en parametre un tableau nommé 'numbers' et
        qui renvoie le plus grand nombre pair contenu dans le tableau recu en parametre quand on l'éxécute.
        Puis executez cette fonction en lui passant le tableau suivant : [1,2,3,4,5,6,12,23,36,42,55,69,73,81,2,99]
        Enfin, récupérez la valeur de retour lors de l'execution de cette fonction et affichez la avec la
        fonction 'echo'. */
$tabo = [1,2,3,4,5,6,12,23,36,42,55,69,73,81,2,99];
function best_even($numbers){
  foreach($numbers as $key => $value){
if($value % 2 == 0){
  echo $value . ' ';
    }
  }
}

best_even($tabo);


 ?>
