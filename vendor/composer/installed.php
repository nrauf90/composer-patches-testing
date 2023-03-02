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
        'cweagans/composer-patches' => array(
            'pretty_version' => '1.7.3',
            'version' => '1.7.3.0',
            'reference' => 'e190d4466fe2b103a55467dfa83fc2fecfcaf2db',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../cweagans/composer-patches',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'nrauf90/greeting' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'c412ef70546fd8c0aa459aa253579c30cd27afa1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../nrauf90/greeting',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
