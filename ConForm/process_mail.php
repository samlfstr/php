<?php

#region Injection Protection
$suspect = false;
// perl compatible regular expression
$pattern = "/Content-type:|Bcc:|Cc:/i";

function isSuspect($value, $pattern, &$suspect)
{
    if (is_array($value)) {
        foreach ($value as $item) {
            isSuspect($item, $pattern, $suspect);
        }
        // backtracking at the end when you collapse do this for every item
    } elseif (preg_match($pattern, $value)) {
        $suspect = true;
    }
}
#endregion

isSuspect($_POST, $pattern, $suspect);

if (!$suspect) :
    foreach ($_POST as $key => $value) {

        // array or not then delete white spaces
        $value = is_array($value) ? $value : trim($value);

        // check if input areases are missing
        if (empty($value) and in_array($key, $required)) {
            // what is missing
            $missing[] = $key;
            // create variables with input area names
            $$key = "";
        } elseif (in_array($key, $expected)) {
            $$key = $value;
        }

    }

    if (!$missing and !empty($email)){
        // verfy if it is a valid email adress
        $validemail = filter_input(INPUT_POST, $email, FILTER_VALIDATE_EMAIL);
        if($validemail){
            $headers[] = "Reply-to :" . $validemail;
        }else{
            $errors['email-error'] = true;
        }

    }

    // we wont create headers before checking for email adress
    if(!$errors and !$missing){
        $headers = implode("\r\n", $headers);
        $message = "";

        foreach ($expected as $field) {
            // take the value stored inside the what field refers
            // (it refers to inputarea names) | isset - not impity or not null
            $val = isset($$field) or !empty($$field) ? $$field : "Not selected";
            // implode each of list elements with a comma
            $val = is_array($field) ? implode(",", $field) : $val;
            // replace underscores with space
            $field = str_replace("_"," ", $field);
            // construct the mesage
            $message .= ucwords($field) .": $val \r\n\r\n";
        }

        // refactor message (allow only to 70 caracters for each line)
        $message = wordwrap($message, 70);

        // mail send check
        $mailsend = true;
        $mailsend = mail($receiver,$subject,$message,$headers,$authorised);
        if (!$mailsend){
            $errors['mail-error'] = true;
        }
    }

endif;


?>
