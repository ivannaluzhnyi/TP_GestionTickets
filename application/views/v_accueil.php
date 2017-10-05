

<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Gestion tickets ==> connexion</h1>
        <div id="image">
            <img src="<?php echo base_url('images/Securite.jpg'); ?>" />
        </div>
     
     <!--   <form method="post" action="index.php/Ctrl_GestionTickets/check">
       
            Login:: <input type="text" name="loginUser" placeholder="Entrez votre login" class="input_box">
            Password: <input type="text" name="pwdUser" placeholder="Entrez votre mot de passe" class="input_box">
            <input type="submit" value="Submit" class="submit"> 
       
          </form>-->
        <br>
        <br>
        <br>
        <?php
        // Open form and set URL for submit form
            echo form_open('/Ctrl_GestionTickets/check');
            echo form_label('User login :', 'loginUser');
            echo form_input('loginUser',set_value('loginUser'));
            echo form_label('User password:', 'pwdUser');
            echo form_input('pwdUser',set_value('pwdUser'));
            
            ?>
        </div>

            <div id="form_button">
            <?php
              echo form_submit('submit','Submit'); 
            ?>
            </div>


<?php echo form_close();?>

            <?php if(isset($loginUser) && isset($pwdUser)){
            echo "<div id='content_result'>";
            echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
            echo "<div id='result_show'>";
            echo "<label class='label_output'>Entered login : </label>".$loginUser;
            echo "<label class='label_output'>Entered password: </label>".$pwdUser;
            echo "<div>";
            echo "</div>";
            } ?>
    </body>
</html>
