<?php

include '../simplelinkedin.class.php';

//Set up the API
$ln = new SimpleLinkedIn('YOUR_API_KEY', 'YOUR_API_SECRET', null, array('w_share'));

//Authorize.
if($ln->authorize()){
    //Make an example post
    $postfields = '<?xml version="1.0" encoding="UTF-8"?>
        <share>
            <visibility>
                <code>anyone</code>
            </visibility>
            <comment>SimpleLinkedIn (SLinkedin): Open source OAuth2 Implementation for PHP and linkedin. Find out more at https://github.com/Wr0ngName/SLinkedIn/</comment>
        </share>
    </xml>';

    try
    {
        $ln->fetch($requestMethod,$url, $postfields, 'xml');
    }
    catch(Exception $e)
    {
        echo 'Error:'.$e->getMessage();
    }
}
?>
