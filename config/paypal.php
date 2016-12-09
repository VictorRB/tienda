<?php
return array(
    // set your paypal credential
    'client_id' => 'AY6ba9P90z_n6U5Cis9q1wRCKsROkfX-NR-9KAcF94_8oaGAG4cF0xTWEC2ht2YB-jEuvHucTpvfdDge',
    'secret' => 'EFRKrJfigvOAB4EJBtZSoyz4MKNxWTf1ZSR9TDR1NuJM55DynxJXphcq7Aa_x9rQcGeNJmEV2kgogdrv',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);