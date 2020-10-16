<?php
require_once('db.php');

$new_connection = db_connect();


$contacts = db_contacts_array();


db_disconnect($new_connection);

?>

<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
     </head>

     <body>
          <table>
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Phone</th>
                    </tr>
               </thead>
               <?php foreach ($contacts as $contact) :?>
               <tr>
                    <td><?php echo $contact['ID']; ?></td>
                    <td><?php echo $contact['Name']; ?></td>
                    <td><?php echo $contact['Phone']; ?></td>
               </tr>
               <?php endforeach; ?>
          </table>
     </body>

</html>