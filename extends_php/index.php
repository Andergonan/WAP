<?php
    spl_autoload_register(function($name) {
        require_once "$name.php";
    });

    $mikes = new Cat("Mikeš");
    echo $mikes;
    $mikes->hp = 80;

    $karlik = new Dog();
    $karlil->certBlind = ["Cisco CCNA1", "BlindGuid LVS"];
    echo $karlik;
?>