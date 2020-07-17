<!DOCTYPE html>

<html>

<?php include("Back-office/header.php")?>;

<header>
<?php include("Back-office/nav.php")?>;<br>
    <h1> Summer Code Camp </h1>
</header>

<body>
    <h2>CONTACT</h2>
    <div id="contact">

        <form method="post"></form>
        <label for="nom"></label>
        <input type="text" id=nom placeholder="Votre nom"><br><br>
        <label for="email"></label>
        <input type="text" id=email placeholder="Votre email"><br><br>
        <label for="ameliorer"></label>
        <textarea type=name id=ameliorer placeholder="Comment ameliorer mon site ?"></textarea><br><br>
        <input type="submit" id=envoyer value="Envoyer">
    </div>

</body>
<?php include("Back-office/footer.php")?>;

</html>
