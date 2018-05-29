<?php

    require_once "Facebook/autoload.php";

    if (!session_id()) {
        session_start();
    }
    

    $FB = new \Facebook\Facebook([
        'app_id' => '221240575097526',
        'app_secret' => '00753e6e6c236af44ee4b16cba7719bc',
        'default_graph_version' => 'v2.10',
    ]);

    $accessToken = '';

    if(isset($_GET['state'])){

        $_SESSION['FBRLH_state']=$_GET['state'];
    }


    $helper = $FB->getRedirectLoginHelper();
    


?>