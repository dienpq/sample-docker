<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpunit/php-timer' => array(
            'pretty_version' => '5.0.3',
            'version' => '5.0.3.0',
            'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-timer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v4.0.0',
            'version' => '4.0.0.0',
            'reference' => '8a628b943cf31ca0a002c08af661a95772480225',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v4.0.0',
            ),
        ),
    ),
);
