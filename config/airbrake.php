<?php

return [

    'projectId'     => '436324',
    'projectKey'    => '0f6c7366bfc8549c32edb0a905517d1a',
    'environment'   => env('APP_ENV', 'production'),

    //leave the following options empty to use defaults

    'host'          => null, #airbrake api host e.g.: 'api.airbrake.io' or 'http://errbit.example.com
    'appVersion'    => null,
    'revision'      => null, #git revision
    'rootDirectory' => null,
    'keysBlacklist' => null, #list of keys containing sensitive information that must be filtered out
    'httpClient'    => null, #http client implementing GuzzleHttp\ClientInterface

];
