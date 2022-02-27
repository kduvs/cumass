<?php

return [
    // SiteController
    '/' => 'site/index',
    '/<action:\w+>' => 'site/<action>',

    // Other Controllers
    '/<controller:\w+>' => '<controller>/index',
    '/<controller:\w+>/<action:\w+>' => '<controller>/<action>',

    // Admin Module
    'admin' => 'admin/default/index',
    'admin/<controller:\w+>' => 'admin/<controller>/index',
    'admin/<controller:\w+>/<action:\w+>' => 'admin/<controller>/<action>',
    
    // Open API Module
    'open-api' => 'api/open/default/index',
    'open-api/<controller:\w+>' => 'api/open/<controller>/index',
    'open-api/<controller:\w+>/<action:\w+>' => 'api/open/<controller>/<action>',

    // Closed API Module
    'closed-api' => 'api/shut/default/index',
    'closed-api/<controller:\w+>' => 'api/shut/<controller>/index',
    'closed-api/<controller:\w+>/<action:\w+>' => 'api/shut/<controller>/<action>',
];