
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
        ?> 
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nom Ticket
                </th>
                <th>
                    Date Ticket
                </th>
                <th>
                    Niveau Ticket
                </th>
                <th>
                    idUser
                </th>
            </tr>
            <?php
                foreach ($lesTickets as $tickets){
                    echo "<tr>"
                            . "<td>".$tickets->idTicket."</td>"
                            . "<td>".$tickets->nomTicket."</td>"
                            . "<td>".$tickets->dateTicket."</td>"
                            . "<td>".$tickets->niveauTicket."</td>"
                            . "<td>".$tickets->idUser."</td>"
                       . "</tr>";
                }
        }
        ?>
        </table>
    </body>
</html>
