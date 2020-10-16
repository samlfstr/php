<?php

require_once('credentials.php');

function db_connect(){
     $connection = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
     return $connection;
}

function db_disconnect($connection){
     if(isset($connection)){
          mysqli_close($connection);
     }
}

function db_all_contacts(){
     global $new_connection;
     $query = 'SELECT * FROM contacts';
     return mysqli_query($new_connection, $query);
}

function db_contacts_array(){
     $all_contacts = db_all_contacts();
     /* $count = myslqi_num_rows($all_contacts); */

     while($contact = mysqli_fetch_assoc($all_contacts)){
          $contacts[] = $contact; 
     }
     return $contacts;
}