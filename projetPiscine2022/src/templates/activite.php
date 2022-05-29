<?php
    require('src/controller/coachController.php');
    $coachController = new CoachController();
    $musculation=$coachController->getOneCoachBySpecialite('musculation');
    $fitness=$coachController->getOneCoachBySpecialite('fitness');
    $biking=$coachController->getOneCoachBySpecialite('biking');
    $cardio=$coachController->getOneCoachBySpecialite('cardio');
    $cours=$coachController->getOneCoachBySpecialite('cours');
?>

<div class="activiteContainer">
    <div id="musculation" class="categorie">
        <div class="categorieTitre">
            Musculation
        </div>
        <div class="categorieTexte">
            La musculation est un ensemble d'exercices physiques visant le développement des muscles squelettiques, afin d'acquérir plus de force, d'endurance, de puissance, d'explosivité ou de volume musculaire. 
            <br>
            Dans ces exercices, une force (par exemple la gravité, avec l'utilisation d'haltères, de bandes élastiques ou encore à l'aide du poids du corps) est opposée de manière répétitive à la force générée par la contraction des muscles. Cette activité est généralement pratiquée dans une salle de sport.
        </div>
        <div class="categorieCoach">
            Votre coach:
            <?php echo $musculation['prenom']." ".$musculation['nom']; ?>
            <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $musculation['photo']; ?>" alt="coachPhoto"/> 
        </div>
    </div>
    <div id="fitness" class="categorie">
    <div class="categorieTitre">
            Fitness
        </div>
        <div class="categorieTexte">
        Le fitness (abréviation de l'expression anglaise physical fitness, « forme physique »), aussi appelé la gymnastique de forme1 ou l'entraînement physique2,
        <br> 
        désigne un ensemble d'activités physiques permettant au pratiquant d'améliorer sa condition physique et son hygiène de vie, dans un souci de bien-être.
        </div>
        <div class="categorieCoach">
            Votre coach:
            <?php echo $fitness['prenom']." ".$fitness['nom']; ?>
            <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $fitness['photo']; ?>" alt="coachPhoto"/> 
        </div>
    </div>
    <div id="biking" class="categorie">
    <div class="categorieTitre">
            Binking
        </div>
        <div class="categorieTexte">
        Le biking ou RPM est un cours de cyclisme indoor, qui consiste en l’utilisation de vélos fixes en salle, et en groupe, le tout en musique.
        <br>
        Encadrés par un coach sportif, les exercices proposés sont basés sur la résistance cardio respiratoire et le travail musculaire (essentiellement le bas du corps). Les intensités sont variées, afin de simuler un parcours de vélo précis. 
        </div>
        <div class="categorieCoach">
            Votre coach:
            <?php echo $biking['prenom']." ".$biking['nom']; ?>
            <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $biking['photo']; ?>" alt="coachPhoto"/> 
        </div>
    </div>
    <div id="cardioTraining" class="categorie"> 
    <div class="categorieTitre">
            Cardio-training
        </div>
        <div class="categorieTexte">
        Le cardio-training (littéralement "l'entraînement du cœur") rassemble des activités de fitness sollicitant le muscle cardiaque afin de l'entraîner à l'effort et ainsi de renforcer les systèmes cardio-vasculaire et cardio-respiratoire. 
        <br>
        Courir, faire du vélo, de la natation, de l'aviron ou du rameur, du step ou encore de la zumba sont des activités de cardio-training.
        </div>
        <div class="categorieCoach">
            Votre coach:
            <?php echo $cardio['prenom']." ".$cardio['nom']; ?>
            <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $cardio['photo']; ?>" alt="coachPhoto"/> 
        </div>
    </div>
    <div id="coursCollectif" class="categorie"> 
    <div class="categorieTitre">
            Cours collectif
        </div>
        <div class="categorieTexte">
        Les cours collectifs d'Omnes regroupent plusieurs formats d’activités et différentes méthodes d’exercices. Chacun d’entre eux permet d’atteindre des objectifs différents.
        <br>
        Dépense calorique, perte de poids, musculation, force, endurance, tonicité du corps… Tu trouveras toujours un cours qui permet de répondre à ton besoin.
        </div>
        <div class="categorieCoach">
            Votre coach:
            <?php echo $cours['prenom']." ".$cours['nom']; ?>
            <img class="coachPhoto" src="data:image/jpg;charset=utf8;base64,<?php echo $cours['photo']; ?>" alt="coachPhoto"/> 
        </div>
    </div>
</div>
