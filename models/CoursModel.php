<?php

function select_date():array {
    $sql="SELECT * FROM cours
    WHERE dateCours=?";
    $result=execute_select($sql);
}
function select_classe(string $libelleClass, string $niveauClass, string $filiereClass):array{
    $sql= "SELECT * FROM cours 
    WHERE classCours=? ";
    $result=execute_select($sql,[$libelleClass,$niveauClass,$filiereClass],true);
   }

function select_module_prof(string $matriculeProf):array{
    $sql= "SELECT moduleProf FROM professeur 
    WHERE matriculeProf=?";
    $result=execute_select($sql,[$matriculeProf]);
   }

function select_module(string $libelleCours):array{
    $sql= "SELECT moduleCours FROM cours
    WHERE classeCours=?";

   }

function select_semestre():array{
    $sql= "SELECT semestreCours FROM cours
    WHERE moduleCours=?";
    $result = execute_select($sql);
   }

function insert_user(array $user):bool{
    extract($user);
    $sql= "INSERT INTO user 
    (login,password,role,nom_complet)
    VALUES 
    (?,?,?,?)";

    $result=execute_update($sql,[$login,$password,$role,$nom_complet]);
    
    return $result["count"]==0?false:true;
}

?>