<script language="JavaScript" type="text/javascript" src="../includes/fonctionsJavascript.inc.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/jquery.js"> </script>
<script language="JavaScript" type="text/javascript" src="../includes/ajax.inc.js"> </script>
<form action="index.php?controleur=utilisateur&action=validerajoutstage" name="FormulaireAjoutStage2" id="FormulaireAjoutStage2" method="POST">


<h1>Information sur le stage</h1>
<fieldset>
    <label for="eleveId">Id de l'élève choisi</label>
    <?php $eleve = $this->Eleve;?>
    <input type="text" name="eleveId" id="eleveId" value="<?php echo $eleve;?>" readonly/>    
    <label for="dateDeb">Date de début du stage:</label>
    <input type="text" name="dateDeb" id="DateDeb" value="AAAA-MM-JJ"/>
    <label for="dateFin">Date de fin du stage:</label>
    <input type="text" name="dateFin" id="dateFin" value="AAAA-MM-JJ"/>
    <label for="AnneeScol">Année scolaire concernée:</label>
    <select id="AnneeScol" name="AnneeScol">
        <option value=""></option>
        <?php
        foreach ($this->lesAnneesScol as $lesAnneesScol){
            //boucle d'affichage de toutes les années scolaire
            echo "<option value='".$lesAnneesScol->ANNEESCOL."'>".$lesAnneesScol->ANNEESCOL."</option>";
        }
        ?>
    </select>
    
    <label for="Professeur">Professeur référant:</label>
    <select id="Professeur" name="Professeur">
        <option value=""></option>
        <?php
        foreach ($this->lesProfesseurs as $lesProfesseurs){
            //boucle d'affichage de toutes les années scolaire
            echo "<option value='".$lesProfesseurs->IDPERSONNE."'>".$lesProfesseurs->NOM." ".$lesProfesseurs->PRENOM."</option>";
        }
        ?>
    </select>
      
    
        <label for="choixEntrepriseStage">Organisation:</label>
        <select id ="choixEntrepriseStage" name="choixEntrepriseStage">
            <option value=""></option>
      <?php 
            foreach ($this->lesEntreprise as $LesEntreprise) { // boucle d'affichage de toute les entreprise
                   echo "<option value='".$LesEntreprise->IDORGANISATION ."'>".$LesEntreprise->NOM_ORGANISATION."</option>" ;
            }
        ?>    
            <option value="creation">Non présente</option>
        
        </select>
        
        <div id="FormulaireMaitreDeStage">
            <!-- select avec la liste de employé pootentiellement maitre de stage-->
        </div>
    
    
    
    
    
    
        
        
   
    
</fieldset>
   
</form>