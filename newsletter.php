<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Style/style.css">
    <title></title>
</head>

<body>
    <?php include("Back-office/header.php")?>;
    
    <?php include("Back-office/nav.php")?>;
    
    <div id="text">
        <h2><br>Newsletter</h2><br>
        <form method="post">
            <input type=text id="mail" placeholder="ID" name="user_id">
        <br>
        <br>
            <input type=text id="mail" placeholder="Votre email" name="user_mail">
        <br>
        <br>           
            <input type=text id="mail" placeholder="Votre nom" name="user_name">
        <br>
        <br>    
            <input type=text id="mail" placeholder="Votre prénom" name="user_name">
        <br>
        <br>
            <button type="submit" id="envoyer">Envoyer</button>
        </form>
        
        
    </div>

    <div>
        <br>
        <div class=carre><br>
            <h3>Instagram</h3>
            <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/242c45218bb4505e9d48edc949c8a1c8.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

            <a class="twitter-timeline" href="https://twitter.com/wymathiieu?ref_src=twsrc%5Etfw">Mathieu</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <br clear="both" />
    </div>

    <br>
<?php include("Back-office/footer.php")?>;
</body>

</html>
