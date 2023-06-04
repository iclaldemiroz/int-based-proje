<?php
   
    echo "Hoş Geldiniz, " . $_SESSION['username'] . "!";

    if ($_SESSION['is_admin']) {
        echo "<p>Admin genel mesajı: Bu bir örnek mesajdır.</p>";
    }
?>
