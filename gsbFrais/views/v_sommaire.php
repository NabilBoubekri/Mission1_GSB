﻿<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            Visiteur :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        <li class="menu-item">
            <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes
                fiches de frais</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulefrais&action=cumulefrais" title="Consultation du cumule des frais">
                 cumule des frais</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=fraisVisiteur&action=fraisVisiteur" title="Consultation du cumule des frais">
                 mission1b</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulefraismois&action=cumulefraismois" title="Consultation du cumule des frais">
                 cumule frais mois</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulevisiteur&action=cumulevisiteur" title="Consultation du cumule des frais">
                 cumule visiteur</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=ajouterfraisforfais&action=ajouterfraisforfais" title="Se déconnecter">Saisie de frais</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</nav>
<section class="content">


