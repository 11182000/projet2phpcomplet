<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        td{
            width: 60px;
            height: 30px;
            text-align: center;
        }
        thead{
            border: 1px solid rgb(14, 9, 2);
            background-color: rgb(6, 210, 13);
            color: rgb(244, 243, 240);
            
            font-size: 18px;
            
        }
        tbody{
            border: 3px solid green;
            background-color: white;
            color: green;
            
            
            font-size: 18px;
        }
        h1{
            text-align: center;
        }
        div{
            margin-left: 35%;
        }
        fieldset{
            border: 3px solid black;
            margin-right: 50%;
            
        }
        h1{
            background-color:rgb(6, 210, 13) ;
            margin-top: 5px;
            padding-top: 0%;
        }
        a{
            color: aliceblue;
            background-color: green;
            width: 200px;
            margin-bottom: 30px;
            text-decoration: none;
            font-size: 30px;
            text-align: center;
            margin-left: 44%;
            margin-top: 250px;
        }
    </style>
</head>
<body>
    <h1>La liste des clients</h1>
    <div>
        <fieldset>
    <table>
        <thead>
            <?php
            //incluire la base de donnees
            include("connexion.php");
            //ecrire la requete 
            $req="select * from client";
            $result=mysqli_query($conn,$req);
            if(mysqli_num_rows($result)>0){

            ?>
            <tr>
                <td>
                    codecl
                </td>
                <td>
                    nomcl
                </td>
                <td>
                    prenomcl
                </td>
                <td>
                    adressecl
                </td>
                <td>
                    Modifier
                </td>
                <td>
                    Supprimer
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){
                
            ?>
            <tr>
                <td>
                    <?=$row['codecl']?>
                </td>
                <td>
                    <?=$row['nomcl']?>
                </td>
                <td>
                    <?=$row['prenomcl']?>
                </td>
                <td>
                    <?=$row['adressecl']?>
                </td>
            <td class="image">
                <a href="modifier.php?id=<?=$row['codecl']?>"><img src="images/Sans titre-1 copie.jpg" style="width: 20px;height: 20px;" alt=""></a>
            </td>
            <td>
                <a href="supprimer.php?id=<?=$row['codecl']?>"><img  src="images/Sans titre-2.jpg" style="width: 20px;height: 20px;"  alt=""></a>
            </td>
        </tr>
        <?php
            }
        }
        else{
            echo "00 client enregistre";
        }
            
        
        ?>
        </tbody>
    </table>
    <a href="accueil.php" class="btn btn--radius btn--yellow">Retour</a>
</fieldset>

    </div>
  
</body>
</html>