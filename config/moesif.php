<?php

/**
 * mask request headers by removing fields
 *
 * @return headers
 */
$maskRequestHeaders = function($headers) {
    $headers['Host'] = '******';
    return $headers;
};

/**
 * Remove any fields from body that you don't want to send to Moesif.
 *
 * @return body
 */
$maskRequestBody = function($body) {
    $body['last_name'] = "********";
    return $body;
};

/**
 * mask request headers by removing fields
 *
 * @return headers
 */
$maskResponseHeaders = function($headers) {
    $headers['Custom-Header'] = '******';
    return $headers;
};

/**
 * Remove any fields from body that you don't want to send to Moesif.
 *
 * @return body
 */
$maskResponseBody = function($body) {
    $body['age'] = "********";
    return $body;
};

/**
 * users the userId. If your app differs from standard lararvel for identify users.
 *
 * @return string
 */

$identifyUserId = function($request, $response) {
    return "12345";
};

/**
 * Use this function to set companyId.
 *
 * @return string
 */

$identifyCompanyId = function($request, $response) {
    return "67890";
};

$getMetadata = function($request, $response) {
  return array("foo"=>"Slim framework example", "boo"=>"custom data here");
};

/**
 * Use this function to find tokenId . If your app differs from standard lararvel for tokenIds.
 *
 * @return string
 */
$identifySessionId = function($request, $response) {
    return "XXXXXXXXXXXXXXXXX";
};

/**
 * If you want to define a skip function.
 *
 */
$skip = function($request, $response) {
    return false;
};

return [
    'applicationId' => 'Your Moesif Application Id',
    'maskRequestHeaders' => $maskRequestHeaders,
    'maskRequestBody' => $maskRequestBody,
    'maskResponseHeaders' => $maskResponseHeaders,
    'maskResponseBody' => $maskResponseBody,
    'identifyUserId' => $identifyUserId,
    'identifyCompanyId' => $identifyCompanyId,
    'getMetadata' => $getMetadata,
    'identifySessionId' => $identifySessionId,
    'apiVersion' => '1.0.0',
    'debug' => true,
    'skip' => $skip
];