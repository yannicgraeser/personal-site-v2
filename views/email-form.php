<?php
    /* test METHOD and if fields are present in POST array */
    if( $_SERVER['REQUEST_METHOD']=='POST' && isset( $_POST['submit'], $_POST['name'], $_POST['email'], $_POST['message'] ) ){

        /* do some sanitation and validation on user input */
        $name=filter_input( INPUT_POST, 'name', FILTER_SANITIZE_STRING );
        $email=filter_var( filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL ), FILTER_VALIDATE_EMAIL );
        $message=filter_input( INPUT_POST, 'message', FILTER_SANITIZE_STRING );

        /* if the sanitation and validation succeeds, continue processing */
        if( $name && $email && $message ){

            $from = 'From: Kontaktformular yannicgraeser.de'; 
            $to = 'vernetzt.quartal_0q@icloud.com';
            $subject = 'Kontaktaufnahme yannicgraeser.de';

            $body = "From: $name\nE-Mail: $email\nMessage:\n $message"; 

            $status=mail( $to, $subject, $body, $from );
            echo $status ? '<h2>Ihre Nachricht wurde gesendet!</h2><p>Ich werde so schnell wie möglich antworten.</p>' : '<p>Etwas ist schief gelaufen :( Versuchen Sie es erneut.</p>';

        } else {
            echo "<p><a href='/kontakt'>Bitte füllen Sie alle Felder aus</a>.</p>";
        }

    } else {
        die("Direct access not allowed!");
    }
?>

<aside class="animated fadeIn">
    <ul>
        <li><a href="https://www.instagram.com/yannicg" target="_blank">Instagram</a></li>
        <li><a href="https://twitter.com/yannicgr" target="_blank">Twitter</a></li>
        <li><a href="https://www.xing.com/profile/Yannic_Graeser" target="_blank">Xing</a></li>
    </ul>
</aside>