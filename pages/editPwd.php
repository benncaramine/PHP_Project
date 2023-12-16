<?php
require_once('identifier.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Changement de mot de passe</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/monjs.js"></script>
</head>
<body style=" background:url('../images/77.jpg')no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">


<div class="container editpwd-page">
    <h1 class="text-center" style="font-size: 55px;
    color:#95B9FF; font-family:Eczar SemiBold;" >Changement de mot de passe </h1>

    <h2 class="text-center" style="font-size: 50px;
    color:#95B9FF; font-family:Eczar SemiBold;" > Compte :<?php echo $_SESSION['user']['login'] ?>    </h2>

    <form class="form-horizontal" method="post" action="updatePwd.php">


        <!-- ***************** Début Ancien mot de passe  ***************** -->
        <div class="input-container">
            <input class="form-control oldpwd"
                   type="password"
                   name="oldpwd"
                   autocomplete="new-password"
                   placeholder="Taper votre Ancien Mot de passe"
                   required>
            <i style="color:white;" class="fa fa-eye fa-2x show-old-pwd clickable"></i>
        </div>


        <!-- ***************** Fin Ancien mot de passe ***************** -->

        <!--  *****************Début Nouveau  mot de passe  ***************** -->

        <div class="input-container">
            <input minlength=4
                    class="form-control newpwd"
                    type="password"
                    name="newpwd"
                    autocomplete="new-password"
                    placeholder="Taper votre Nouveau Mot de passe"
                    required>
            <i style="color:white;" class="fa fa-eye fa-2x show-new-pwd clickable"></i>

        </div>
        <!--  *****************  Fin Nouveau  mot de passe   ***************** -->

        <!--  ***************** start submit field  ***************** -->

        <input
                type="submit"
                value="Enregistrer"
                class="btn btn-primary btn-block"/>

        <!--   ***************** end submit field  ***************** -->

    </form>
</div>

</body>
</html>



