<?php
/**
 * Created by PhpStorm.
* User: chenzeyu
* Date: 2018/5/3
* Time: 09:19
*/
include("Modele.php");
include("Vue.php");
verif_authent();
entete();
bandeau();
container();
echo '
       <button class="btn" onclick="location.href=\'Leave.php\'" >Leave</button>
       <br/>
';
pied();
?>
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
