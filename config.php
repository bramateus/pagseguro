<?php 

    //Config SANDBOX or PRODUCTION environment
    $SANDBOX_ENVIRONMENT = true;

    
    $JS_FILE_URL = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';
    if($SANDBOX_ENVIRONMENT){
        $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
        $JS_FILE_URL = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    }

    $PAGSEGURO_EMAIL = 'bc6939d185@mailboxy.fun';
    $PAGSEGURO_TOKEN = '32B46731931C4D16B7A11F349C763729';

    // $PAGSEGURO_EMAIL = 'YOUR_EMAIL';
    // $PAGSEGURO_TOKEN = 'YOUR_TOKEN';
?>