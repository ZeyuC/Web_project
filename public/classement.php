<?php
/**
 * Created by PhpStorm.
 * User: clement
 * Date: 19/04/18
 * Time: 22:04
 */
include("Modele.php");
include("Vue.php");
entete() ;
bandeau();
$connection = db_connect();
$mangas = db_fetchAll_Mangas($connection);
?>
<div class="container">
    <table>
        <?php
        foreach ($mangas as $manga) : ?>
            <tr>
                <td><?php echo $manga->getNom() ?></td>
                <td><em><?php echo $manga->getAuteur() ?></em></td>
                <td><?php echo $manga->getGenre() ?></td>
                <td><em><?php echo $manga->getStatut() ?></em></td>

            </tr>
        <?php endforeach; ?>

    </table>
</div>

<?php pied() ?>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>


