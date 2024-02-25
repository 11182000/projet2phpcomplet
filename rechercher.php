<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
            color: rgb(6, 210, 13);
            
            font-size: 18px;
        }
     a{
            color: aliceblue;
            background-color: rgb(6, 210, 13);
            width: 200px;
            margin-bottom: 30px;
            text-decoration: none;
            font-size: 30px;
            text-align: center;
            margin-left: 44%;
            margin-top: 250px;
        }
        h1{
            background-color:rgb(6, 210, 13) ;
            color: aliceblue;
            margin-top: 5px;
            padding-top: 0%;
            text-align: center;
        }
        fieldset{
            border: 3px solid black;
            margin-right: 50%;
            
        }
        input{
            text-align: right;
            border: 2px solid black;
            width: 200px;
            height: 25px;
            margin-left: 40%;
            background-color:rgb(6, 210, 13);
        }
</style>
<body>
    <h1>Rechercher un client </h1>
    <div style="margin-left: 35%;">
        <fieldset>
    <form method="POST">
        
        <div class="input-group">
            <input class="input--style-1" type="number" placeholder="Saisir le code a rechercher" name="codecl"> <br><br>
        </div>
        <div class="p-t-20">
            <input style="height: 25px;width: 90px;margin-left: 70%;background-color:rgb(6, 210, 13) ;color: beige;font-size: 15px;" class="btn btn--radius btn--green" type="submit" value="Rechercher" name="Rechercher"><br><br><br>
        </div>
    </form>
    
    <table>
        <thead>
            <?php
            //incluire la base de donnees
            include("connexion.php");
            //ecrire la requete 
            if(isset($_POST["Rechercher"])){
                $codecl=$_POST["codecl"];
                $req="select * from client where codecl='$codecl'";
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
               
            </tr>
        </thead>
        <tbody>
            <?php
            $row=mysqli_fetch_assoc($result)
                
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
           
        </tr>
        <?php
            
        }else{
            echo "ce client n'existe pas";
        }
        
    }   
        
        ?>
        </tbody>
    </table> <br><br><br>
    <div class="input-group">
    <a href="accueil.php" class="btn btn--radius btn--yellow">accueil</a>
        </div>
    
</fieldset>
</div>
</body>
</html>