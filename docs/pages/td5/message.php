<?php
$message = isset($_GET['message']) ? $_GET['message'] : 'Message par défaut';
?>

    


    <ul>
        <li><a href="?message=Bonjour!">Bonjour!</a></li>
        <li><a href="?message=Message important!">Message important"</a></li>
        <li><a href="?message=Bienvenue sur la page PHP!">Bienvenue sur la page PHP!</a></li>
    </ul>
</body>
</html>