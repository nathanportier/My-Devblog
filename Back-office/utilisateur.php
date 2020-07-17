<!DOCTYPE html>

<?php  
try 
{
$bdd = new PDO('mysql:host=localhost;dbname=minisite', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
} 
$reponse = $bdd->query('SELECT * FROM utilisateurs');

while ($donnees = $reponse->fetch())
    ?>
<tr>
    <td><?php $donnée ['Prénom'] ?></td>
    <td><?php $donnée ['Nom'] ?></td>
    <td><?php $donnée ['Adresse email'] ?></td>
    <td><?php $donnée ['Password'] ?></td>
</tr>

<html lang="fr">
    <?php
    include 'header.php'
    ?>;
    
    <body>
        <header>
            <?php
            include 'nav.php';
            ?>
        </header>
        <div class="content">
            <?php
            include 'menu.php'
            ?>;
            <div class="main">
                <h2>Gestions des utilisateurs</h2>
                <a href="admin-utilisateurs.php"><button class="green">Ajouter</button></a>
                <div class="tab">
                    <table>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Adresse email</th>
                            <th>Password</th>
                            <th class="empty"></th>
                            <th class="empty"></th>
                        </tr>
                        <tr>
                            <td>Jean-François</td>
                            <td>Cerisier</td>
                            <td>jfcerisier@gmail.com</td>
                            <td>12345678</td>
                            <td>
                                <button class="green">Editer</button>
                            </td>
                            <td>
                                <button class="red">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Atsuchi</td>
                            <td>Murasakibara</td>
                            <td>Atsuchi@gmail.com</td>
                            <td>demain478</td>
                            <td>
                                <button class="blue">Editer</button>
                            </td>
                            <td>
                                <button class="red">Supprimer</button>
                            </td>
                        </tr>
                        
                            <td>Didier</td>
                            <td>laD</td>
                            <td>didierlad@gmail.com</td>
                            <td>12345678</td>
                            <td>
                                <button class="blue">Editer</button>
                            </td>
                            <td>
                                <button class="red">Supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Nathan</td>
                            <td>Portier</td>
                            <td>nportiern@gmail.com</td>
                            <td>12345678</td>
                            <td>
                                <button class="blue">Editer</button>
                            </td>
                            <td>
                                <button class="red">Supprimer</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>