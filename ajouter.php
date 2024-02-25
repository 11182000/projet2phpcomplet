<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        a{
            color: aliceblue;
            background-color: green;
            width: 200px;
            margin-bottom: 30px;
            text-decoration: none;
        }
        h1{
            background-color:green ;
            margin-top: 5px;
            padding-top: 0%;
            color: aliceblue;
        }
       
    </style>
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Enregistrement d'un client</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="nom du client" name="nomcl">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="prenom du client" name="prenomcl">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="adresse du client" name="adressecl">
                        </div>
                      
                        <div class="p-t-20">
                            <input class="btn btn--radius btn--green" type="submit" value="Ajouter" name="Ajouter"><br><br><br>
                        </div>
                    </form>
                    <div class="input-group">
                        <a href="lister.php" class="btn btn--radius btn--green" >  Liste des clients  </a>  
                        <a href="accueil.php" class="btn btn--radius btn--yellow">Retour</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        //Incluire la page de la connexion
        include("connexion.php");
        //declarer les variables 
        if(isset($_POST["Ajouter"])){
        $nomcl=$_POST['nomcl'];
        $prenomcl=$_POST['prenomcl'];
        $adressecl=$_POST['adressecl'];
        //ecrire la requete
        $req="insert into client (nomcl,prenomcl,adressecl) values ('$nomcl','$prenomcl','$adressecl')";
        //executer la requete
        $result=mysqli_query($conn,$req);
    }
    ?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
