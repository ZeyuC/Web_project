<?php 

include("db.php");
?>

<?php

function trueadmin($pseudo)
{
	$requete= "SELECT admin FROM users WHERE pseudo='$pseudo' ";

	$dbquery = db_query($connexion,$requete);
	if ($dbquery != false ) {
        $dbcount = db_count($dbq);
        if ($dbcount == 1) {
            $rep = db_fetch($dbq);
            $bool = $rep['admin'];
            if ($bool) {

                $grantdroits = "GRANT ALL PRIVILEGES ON users,manga,chapitre,biblio TO '$pseudo' WITH GRANT OPTION";

                db_query($connection, $grantdroits);

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
	else {return false ; }
}

?>
