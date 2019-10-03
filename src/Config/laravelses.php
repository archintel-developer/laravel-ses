<?php

return [
    'aws_sns_validator' => false,

    'ses'  =>  [
        // The identity (email address or domain) that you want to set the Amazon SNS topic for.
        // ex. sender@example.com, example.com , you can use this example.
        'domain' => env('AWS_SES_IDENTITY')
    ],
];
