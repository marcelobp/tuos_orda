<?php
switch (getenv('APPLICATION_ENV')){
	
	//QA SERVER
	case 'development':
		//https://twitter.com/CicsTest
		$twitter_config = [
				'api.url'                       => 'https://api.twitter.com/1.1/',
				'api.oauth_access_token'        => '783221486991581184-9UZhiyeuv5G1TAqPUS2WIvteLjFl5ac',
				'api.oauth_access_token_secret' => 'yu3dNcVcUzYec3zkJmRWaGBBNRyIys7mumFFsRyvMdl56',
				'api.consumer_key'              => 'hAfyvQKcaOsbniO5QNGr5ICQH',
				'api.consumer_secret'           => 'WIFiQChTekUWZFmGNG6YZWluoGqQls0gsm8KGhLBWURNvrwScI',
				'api.recently_added'            => 10,
				'api.limit_publications'        => 4,  // limit of publications on tweeter per execution
				'api.frequence_execution'       => 1    // execution periodicity by days
		];
		
		$figshare_config = [
				'api.url'                      => 'https://api.figsh.com/v2/',
				'api.oai'                      => 'https://api.figsh.com/v2/oai',
				'api.stats'                    => 'https://stats.figsh.com',
				'api.institution'              => '16',
				'api.page_size'                => '10',
				'api.visualisation_collection' => '2735065',
				'api.carousel_collection'      => '2739539',
				'api.personal_token'           => 'c97a68761591badc1b1a27c2b3ea199249df13890bea077eb0fe9e3c0da71a43a5b00a85a9a9325dd39de13e7adbc0480d989235b88f82feb6ceae5cd17a9be5',
		];
		
		$email_to = "j.s.cope@sheffield.ac.uk";
		$email_inaccessible_to = "j.s.cope@sheffield.ac.uk";
		break;
		
	//DEV LOCAL SERVER
	case 'marcelo':
		$twitter_config = [
				'api.url'                       => 'https://api.twitter.com/1.1/',
				'api.oauth_access_token'        => '1356299095-Tfrsjm7U3vIsKMcBYtTFZ3H94Dvpxp0Wh2Aob5X',
				'api.oauth_access_token_secret' => '5e1J9WDXEKHlO1A4zVsn0vcEuSkOQs0z2UfQwGfI6cikB',
				'api.consumer_key'              => 'xgzz4Cf3L3Mphti9NPzSSR0EJ',
				'api.consumer_secret'           => 'JZ5gIsXkX0wRkKGkBtQjvm4LMhziRmNNQuWx3p7KMbT3lVotM2',
				'api.recently_added'            => 10,
				'api.limit_publications'        => 4,  // limit of publications on tweeter per execution
				'api.frequence_execution'       => 1    // execution periodicity by days
		];
		
		$figshare_config = [
				'api.url'                      => 'https://api.figshare.com/v2/',
				'api.oai'                      => 'https://api.figshare.com/v2/oai',
				'api.stats'                    => 'https://stats.figshare.com',
				'api.institution'              => '54',
				'api.page_size'                => '10',
				'api.visualisation_collection' => '3879643',
				'api.carousel_collection'      => '3679363',
				'api.conferences'              => '8932',
				'api.institutes'               => '9835',
				'api.personal_token'           => 'f285395f23b8aa7e8b0b0260b3d8074c07279f79b26a1863d00af83d1bf34edf1f6df4eebb5936f9bf7c468d1955791e3de573f1414c428de983968c2357902a',
		];
		
		$email_to = "m.paulino@sheffield.ac.uk";
		$email_inaccessible_to = "m.paulino@sheffield.ac.uk";
		break;
		
	//LIVE SERVER
	default:
		//https://twitter.com/OpenResShef
		$twitter_config = [
				'api.url'                       => 'https://api.twitter.com/1.1/',
				'api.oauth_access_token'        => '1356299095-Tfrsjm7U3vIsKMcBYtTFZ3H94Dvpxp0Wh2Aob5X',
				'api.oauth_access_token_secret' => '5e1J9WDXEKHlO1A4zVsn0vcEuSkOQs0z2UfQwGfI6cikB',
				'api.consumer_key'              => 'xgzz4Cf3L3Mphti9NPzSSR0EJ',
				'api.consumer_secret'           => 'JZ5gIsXkX0wRkKGkBtQjvm4LMhziRmNNQuWx3p7KMbT3lVotM2',
				'api.recently_added'            => 10,
				'api.limit_publications'        => 4,  // limit of publications on tweeter per execution
				'api.frequence_execution'       => 1    // execution periodicity by days
		];
		
		$figshare_config = [
				'api.url'                      => 'https://api.figshare.com/v2/',
				'api.oai'                      => 'https://api.figshare.com/v2/oai',
				'api.stats'                    => 'https://stats.figshare.com',
				'api.institution'              => '54',
				'api.page_size'                => '10',
				'api.visualisation_collection' => '3879643',
				'api.carousel_collection'      => '3679363',
				'api.conferences'              => '8932',
				'api.institutes'               => '9835',
				'api.personal_token'           => 'f285395f23b8aa7e8b0b0260b3d8074c07279f79b26a1863d00af83d1bf34edf1f6df4eebb5936f9bf7c468d1955791e3de573f1414c428de983968c2357902a',
		];
		
		$email_to = "orda-feedback-group@sheffield.ac.uk";
		$email_inaccessible_to = "figshare-admins-group@sheffield.ac.uk";
}

return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails'               => true,

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/src/View',

        	'twig' => [
                'cache'       => __DIR__ . '/../cache/twig',
                'debug'       => true,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
        ],

    	'logger_twitter' => [
    	    'name' => 'app',
    	    'path' => __DIR__ . '/../log/twitter.log',
    	],
    		
		// App Settings
		'email_feedback_to' => $email_to, 
    	'email_inaccessible_to' => $email_inaccessible_to,

     // figshare api config
   	'figshare' => $figshare_config,

        // twitter api config
   	'twitter' => $twitter_config,
    ],
];
