<?php
/**
 * @filename aws.php
 *
 * Global AWS SDK Loader with hard-coded config settings to override
 * the dependence on ~/.aws/* files.
 *
 * This is arguably a bad way to do this, but under certain server
 * configurations, this is the more convenient and portable solution.
 *
 */
require 'vendor/autoload.php';

define('AWS_KEY','???.replace.me.???');
define('AWS_SECRET','???.replace.me.???');
define('AWS_VERSION','latest');
define('AWS_REGION','us-west-1');

$aws = new Aws\Sdk(array(
        'credentials' => array(
            'key'    => AWS_KEY,
            'secret' => AWS_SECRET,
        ),
        'version' => AWS_VERSION,
        'region' => AWS_REGION
    )
);