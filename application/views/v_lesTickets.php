
<html>
    <head>
        <title>Tickets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Tickets</div>
        <?php
        
        if(isset($lesTickets)==true){
            
        foreach ($lesTickets as $tickets){
            echo"<p> id -".$tickets->idTicket." - nom".$tickets->nomTicket." ";
        }
        }
        
         if(isset($loginUser) && isset($pwdUser)){
             echo"lol";
         }
        ?>
    </body>
</html>
