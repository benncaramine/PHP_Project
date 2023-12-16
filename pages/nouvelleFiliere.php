<?php 
    require_once('identifier.php');
?>
<! DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Nouvelle filière</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body style=" background:url('../images/5+.jpg')no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
        <?php include("menu.php"); ?>
        
        <div class="container">
                       
             <div class="panel panel-primary margetop60">
                <div class="panel-heading">Veuillez saisir les données de la nouvelle filère</div>
                <div class="panel-body">
                    <form method="post" action="insertFiliere.php" class="form">
						
                        <div class="form-group">
                             <label for="niveau">Nom de la filière:</label>
                            <input type="text" name="nomF" 
                                   placeholder="Nom de la filière"
                                   class="form-control"/>
                        </div>
                        
                        <div class="form-group">
                            <label for="niveau">Niveau:</label>
				            <select name="niveau" class="form-control" id="niveau">
                                <option value="TS" selected>Téchnicien Spécialisé</option>
                                <option value="L">Licence</option>
                                <option value="M">Master</option>
                                <option value="CI">Cycle Ingénieur</option>
				            </select>
                        </div>
                        
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button> 
                      
					</form>
                </div>
            </div>
            
        </div>      
    </body>
</HTML>