<?php
    // connexion à la base de donées
    $db=mysql_connect('localhost','root','joliverie');
    mysql_select_db('GESTAGE',$db);
    //instantiation des donnée
    $idEntreprise='';
    //récupération des donnée envoyer par jQuery
    if(isset($_GET['value3'])){
        $idEntreprise=$_GET['value3'];
    }
    
     $requet="SELECT p.NOM, p.PRENOM, p.IDPERSONNE ";
     $requet.="FROM PERSONNE p ";
     $requet.="INNER JOIN CONTACT_ORGANISATION c ON c.IDCONTACT = p.IDPERSONNE ";
     $requet.="WHERE c.IDORGANISATION ='".$idEntreprise. "';"; // requete pour récupérer le contenue  du tableaux
             $requetExe=mysql_query($requet);      
            // création du contenue du select :
             echo"<label>Maitre de stage</label>";
             echo'<select id="choixMaitreStage" name="choixMaitreStage">';
             echo'<option value=""></option>';
            
            While ($data=mysql_fetch_assoc($requetExe))  { //boucle de ligne du tableau
                      
                   echo'<option value="'.$data['IDPERSONNE'].'">'.$data['NOM'].' '.$data['PRENOM'].'</option>';   
                   
                   
            
        }
        echo"</select>";
        echo"<input type='submit' value='ajouter le stage'>";     
    
?>