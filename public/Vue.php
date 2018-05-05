<?php
/**
 * Created by PhpStorm.
 * Date: 2018/5/3
 * Time: 10:07
 */
function entete(){
    print "<html xmlns=\"http://www.w3.org/1999/html\">\n";
    print "<head>\n";
    print "<link rel=\"stylesheet\" href=\"style1.css\"/>";
    print "<title>OUISCAN</title>";
    print "</head>\n";
    print "<body>\n";
}

function bandeau(){
    print "<div class=\"Nomdusite\"> OUISCAN </div> ";
    print "<div class=\"header\" id=\"myHeader\">\n";
    print "<div id =\"navbar\">\n";
    print "<a class='lien'  href=\"index.php\">Accueil</a>\n";
    print "<a class='lien' href=\"lecture.php\">Lecture en ligne</a>\n";
    print "<a class='lien' href=\"classement.php\">Classement mangas</a>\n";
    print "<a class='img_lien' href=\"Profil.php\"><img src='default_icon.png'/></a>\n";
    print "</div>\n";
    print "</div>\n";
}

function pied(){
    print "<div class=\"footer\">\n";
    print "<footer>\n";
    print "Clément Veyssière, Eric Wang, Shuo XU, Zeyu Chen | © Copyright 2017 | ENSIIE\n";
    print "</footer>\n";
    print "</div>\n";

}

function container()
{
    echo '<div class="container" > </div >';
}

function contenu(){
    echo '<div class="container">
    <div class="row">
        <div class="column">
            <ul class="chapitres">
                <li>Chapitre 1</li>
                <li>Chapitre 2</li>
                <li>Chapitre 3</li>
                <li>Chapitre 4</li>
                <li>Chapitre 5</li>
                <li>Chapitre 6</li>
                <li>Chapitre 7</li>
                <li>Chapitre 8</li>
                <li>Chapitre 9</li>
                <li>Chapitre 10</li>
            </ul>
        </div>
        <div class="column">
            <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus tellus est, in volutpat tortor scelerisque sit amet. Cras sit amet nibh in ligula hendrerit dictum. Ut convallis pellentesque aliquam. Phasellus non purus id sapien vestibulum semper eget eget tellus. Nullam fringilla quam at mauris consequat, in vehicula lectus accumsan. Aenean consequat ante ac elementum aliquam. Donec blandit sem turpis, sed euismod mi suscipit id. Proin vel lectus non purus viverra luctus quis in urna. Ut diam erat, porttitor efficitur quam ac, accumsan mattis metus.
            </p>
            <hr noshade="true" size="1"/>
            <p>
    In nulla risus, tincidunt et mi nec, tempor faucibus nibh. Nulla imperdiet posuere lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus congue quam libero, in porta lectus varius in. Nam porta, ex nec ullamcorper faucibus, felis nibh maximus dolor, rhoncus aliquam mi lectus imperdiet mi. Donec maximus lacus vitae posuere consequat. Sed commodo lectus quis tempor posuere. Aliquam facilisis quis libero eget aliquet. Cras vulputate finibus metus, vitae cursus mauris rhoncus eu. Cras sit amet ultricies ipsum. Phasellus turpis felis, posuere sit amet nisl nec, finibus efficitur neque. Suspendisse purus augue, aliquam et ornare efficitur, hendrerit ut tortor.
            </p>
            <hr noshade="true" size="1"/>
            <p>
    Morbi eu egestas nisl. Quisque ac nulla mattis, aliquam tellus et, pretium magna. Vestibulum a euismod dui. Nulla vel dui neque. Nullam consectetur orci non massa tempor aliquet. Sed egestas semper nulla, non porta neque lacinia at. Proin id libero erat.
            </p>
            <hr noshade="true" size="1"/>
            <p>
    Maecenas dapibus ipsum non facilisis maximus. Vivamus non urna nisl. Morbi lobortis, nunc sit amet interdum sodales, eros dolor efficitur turpis, in vulputate nisi eros a enim. Vestibulum in orci pellentesque, egestas sapien at, aliquet massa. Sed hendrerit finibus purus. Cras eget dui mattis, dictum lacus consectetur, sodales nulla. Donec vitae aliquam ante, vel lacinia felis. Phasellus venenatis orci ut accumsan elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam finibus velit id orci placerat pharetra. Mauris tincidunt accumsan nisl et porta. Proin pretium pretium quam at consectetur. Pellentesque blandit dui non nibh euismod, ut scelerisque ipsum ullamcorper. Ut odio nulla, dignissim at ornare non, varius ut velit. Praesent eu dignissim justo. Etiam suscipit rutrum orci, vitae ullamcorper diam blandit nec.
            </p>
            <hr noshade="true" size="1"/>
            <p>
    Nullam finibus laoreet tellus, vitae accumsan sem rhoncus non. Fusce malesuada mi nec dictum porta. Pellentesque ut neque tincidunt, sagittis metus at, tempor ligula. Fusce tincidunt ut ipsum eget mollis. Aliquam ac consectetur risus. Fusce enim est, venenatis et pulvinar et, euismod et est. In hac habitasse platea dictumst. Suspendisse potenti. Curabitur tempor dolor id pellentesque euismod. Quisque vitae odio sit amet velit porta accumsan. Mauris quis urna eros. Aliquam ullamcorper nunc erat, eget condimentum neque varius ac.
            </p>
        </div>
    </div>
</div>';
}
/* Page de connexion */
function vue_connexion() {
    echo '
    <h1>Bienvenue sur OUISCAN.</h1>
    <p>Pour lire les mangas, veuillez d\'abord rentrer le mot de passe.</p><br/>
    <form action="VerifMDP.php" method="post">
        <label>Identifiant</label>
        <input type="username" name="uname" size="8"/><br/>
        <label>Mot de passe</label>
        <input type="password" name="mdp" size="8"/><br/>
        <input class="btn1" type="submit" value="Valider"/>
    </form>
    <div class="clearfix"></div>';
}

function vue_deconnexion() {
    echo '
    <p>La déconnexion a bien eu lieu.</p>
    <p>Merci d\'avoir utilisé OUIscan.</p><br/>';
}

/* Affichage basique d'une chaîne */
function affiche($str) { echo $str; }
/* Affichage d'une information */
function affiche_info($str) { echo '<p>'.$str.'</p>'; }
/* Affichage d'une erreur */
function affiche_erreur($str) { echo '<p class="erreur">'.$str.'</p>'; }
?>