<?php

require '../aws.php';

$s3 = $aws->createS3();

$data = [
    'Bucket' => 'my-s3-bucket',
    'Key'    => 'path/to/upload/file/to.txt',
    'Body'   => 'Hello, S3.',
    'ACL'    => 'public-read'
];

$result = $s3->putObject($data);

print_r($result);
