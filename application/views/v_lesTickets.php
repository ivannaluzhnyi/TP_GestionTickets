
<html>
    <head>
        <title>Tickets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <h1> Les Tickets</h1>
        <?php
        
        if(isset($lesTickets)==true){
        ?> 
        <table class="table table-bordered">
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
