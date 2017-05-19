<?php

include '../simplelinkedin.class.php';

//Set up the API
$ln = new SimpleLinkedIn('YOUR_API_KEY', 'YOUR_API_SECRET', null, array('w_share'));

//Authorize.
if($ln->authorize()){
    //Make an example post

    try
    {
        $ln->fetch('POST','/v1/people/~/shares?format=json',
            array(
                'comment' => 'Hello Linkedin',
                'content' => array(
                    'title' => 'SimpleLinkedIn (SLinkedin)',
                    'description' => 'Open source OAuth2 Implementation for PHP and linkedin.',
                    'submittedUrl' => 'https://github.com/Wr0ngName/SLinkedIn/'
                ),
                'visibility' => array('code' => 'anyone' )
            )
        )
    }
    catch(Exception $e)
    {
        echo 'Error:'.$e->getMessage();
    }
}
?>
