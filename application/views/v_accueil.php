

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Gestion tickets ==> connexion</h1>
        <div id="image">
            <img src="<?php echo base_url('images/Securite.jpg'); ?>" />
        </div>
     
        <form method="get" action="Ctrl_GestionTickets/check">
       
            Login:: <input type="text" name="loginUser" placeholder="Entrez votre login" class="input_box">
            Password: <input type="text" name="pwdUser" placeholder="Entrez votre mot de passe" class="input_box">
            <input type="submit" value="Submit" class="submit"> 
       
     
         
      
        </form>
    </body>
</html>
