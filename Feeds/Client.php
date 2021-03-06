<?php

namespace Amazon\MWS\Feeds;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Feeds\Exception as FeedsException;
use Amazon\MWS\Feeds\Model\CancelFeedSubmissionsRequest;
use Amazon\MWS\Feeds\Model\CancelFeedSubmissionsResponse;
use Amazon\MWS\Feeds\Model\ErrorResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionCountRequest;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionCountResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListByNextTokenRequest;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListByNextTokenResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListRequest;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionResultRequest;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionResultResponse;
use Amazon\MWS\Feeds\Model\ResponseHeaderMetadata;
use Amazon\MWS\Feeds\Model\SubmitFeedRequest;
use Amazon\MWS\Feeds\Model\SubmitFeedResponse;

define('CONVERTED_PARAMETERS_KEY', 'PARAMETERS');
define('CONVERTED_HEADERS_KEY',    'HEADERS');

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 *
 * Feeds\Client is an implementation of MarketplaceWebService
 */
class Client extends BaseClient implements FeedsInterface
{
    const REQUEST_TYPE       = "POST";
    const SERVICE_VERSION    = '2009-01-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    private $defaultHeaders = array();

    private $responseBodyContents;

    // "streaming" responses that are errors will be send to this handle;
    private $errorResponseBody;

    private $headerContents;

    private $curlClient;

    // Public API ------------------------------------------------------------//

    /**
     * Submit Feed
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html
     * @param mixed $request array of parameters for SubmitFeedRequest request
     * or SubmitFeedRequest object itself
     * @see SubmitFeed
     * @return SubmitFeedResponse SubmitFeedResponse
     *
     * @throws Exception
     */
    public function submitFeed($request)
    {
        if (!$request instanceof SubmitFeedRequest) {
            $request = new SubmitFeedRequest($request);
        }
        $httpResponse = $this->invoke($this->convertSubmitFeed($request), $request->getFeedContent(), $request->getContentMd5());
        $response = SubmitFeedResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     * @param mixed $request array of parameters for GetFeedSubmissionListByNextTokenRequest request
     * or GetFeedSubmissionListByNextTokenRequest object itself
     * @see GetFeedSubmissionListByNextToken
     * @return GetFeedSubmissionListByNextTokenResponse GetFeedSubmissionListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionListByNextToken($request)
    {
        if (!$request instanceof GetFeedSubmissionListByNextTokenRequest) {
            $request = new GetFeedSubmissionListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionListByNextToken($request));
        $response = GetFeedSubmissionListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     * @param mixed $request array of parameters for CancelFeedSubmissionsRequest request
     * or CancelFeedSubmissionsRequest object itself
     * @see CancelFeedSubmissions
     * @return CancelFeedSubmissionsResponse CancelFeedSubmissionsResponse
     *
     * @throws Exception
     */
    public function cancelFeedSubmissions($request)
    {
        if (!$request instanceof CancelFeedSubmissionsRequest) {
            $request = new CancelFeedSubmissionsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertCancelFeedSubmissions($request));
        $response = CancelFeedSubmissionsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     * @param mixed $request array of parameters for GetFeedSubmissionCountRequest request
     * or GetFeedSubmissionCountRequest object itself
     * @see GetFeedSubmissionCount
     * @return GetFeedSubmissionCountResponse GetFeedSubmissionCountResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionCount($request)
    {
        if (!$request instanceof GetFeedSubmissionCountRequest) {
            $request = new GetFeedSubmissionCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionCount($request));
        $response = GetFeedSubmissionCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Feed Submission Result
     * retrieves the feed processing report
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     * @param mixed $request array of parameters for GetFeedSubmissionResultRequest request
     * or GetFeedSubmissionResultRequest object itself
     * @see GetFeedSubmissionResult
     * @return GetFeedSubmissionResultResponse GetFeedSubmissionResultResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionResult($request)
    {
        if (!$request instanceof GetFeedSubmissionResultRequest) {
            $request = new GetFeedSubmissionResultRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionResult($request), $request->getFeedSubmissionResult());
        $response = GetFeedSubmissionResultResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     * @param mixed $request array of parameters for GetFeedSubmissionListRequest request
     * or GetFeedSubmissionListRequest object itself
     * @see GetFeedSubmissionList
     * @return GetFeedSubmissionListResponse GetFeedSubmissionListResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionList($request)
    {
        if (!$request instanceof GetFeedSubmissionListRequest) {
            $request = new GetFeedSubmissionListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetFeedSubmissionList($request));
        $response = GetFeedSubmissionListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    // Private API ------------------------------------------------------------//

    /**
     * Get the base64 encoded md5 value of $data. If $data is a memory or temp file stream, this
     * method dumps the contents into a string before calculating the md5. Hence, this method
     * shouldn't be used for large memory streams.
     *
     * @param $data
     * @return unknown_type
     */
    private function getContentMd5($data)
    {
        $md5Hash = null;

        if (is_string($data)) {
            $md5Hash = md5($data, true);
        } else if (is_resource($data)) {
            // Assume $data is a stream.
            $streamMetadata = stream_get_meta_data($data);

            if ($streamMetadata['stream_type'] === 'MEMORY' || $streamMetadata['stream_type'] === 'TEMP') {
                $md5Hash = md5(stream_get_contents($data), true);
            } else {
                $md5Hash = md5_file($streamMetadata['uri'], true);
            }
        }

        return base64_encode($md5Hash);
    }

    /**
     * Invoke request and return response
     */
    private function invoke(array $converted, $dataHandle = null, $contentMd5 = null)
    {
        $parameters = $converted[CONVERTED_PARAMETERS_KEY];
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {
            // Ensure the endpoint URL is set.
            if (empty($this->config['ServiceURL'])) {
                throw new Exception(
                    array('ErrorCode' => 'InvalidServiceUrl',
                    'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);
            $converted[CONVERTED_PARAMETERS_KEY] = $parameters;

            $shouldRetry = false;
            $retries = 0;
            do {
                try {
                    $response = $this->performRequest($actionName, $converted, $dataHandle, $contentMd5);

                    $httpStatus = $response['Status'];

                    switch ($httpStatus) {
                    case 200:
                        $shouldRetry = false;
                        break;

                    case 500:
                    case 503:
                        $errorResponse = ErrorResponse::fromXML($response['ResponseBody']);

                        // We will not retry throttling errors since this would just add to the throttling problem.
                        $shouldRetry = ($errorResponse->getError()->getCode() === 'RequestThrottled')
                            ? false : true;

                        if ($shouldRetry && $retries <= $this->config['MaxErrorRetry']) {
                            $this->_pauseOnRetry(++$retries);
                        } else {
                            throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                        }
                        break;

                    default:
                        $shouldRetry = false;
                        throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                        break;
                    }

                    /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    throw new Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                }

            } while ($shouldRetry);

        } catch (Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
        return array('ResponseBody' => $response['ResponseBody'], 'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
    }

    /**
     * Setup and execute the request via cURL and return the server response.
     *
     * @param $action - the MWS action to perform.
     * @param $parameters - the MWS parameters for the Action.
     * @param $dataHandle - A stream handle to either a feed to upload, or a report/feed submission result to download.
     * @param $contentMd5 - The Content-MD5 HTTP header value used for feed submissions.
     * @return array
     */
    private function performRequest($action, array $converted, $dataHandle = null, $contentMd5 = null)
    {
        $curlOptions = $this->configureCurlOptions($action, $converted, $dataHandle, $contentMd5);

        if (is_null($curlOptions[CURLOPT_RETURNTRANSFER]) || !$curlOptions[CURLOPT_RETURNTRANSFER]) {
            $curlOptions[CURLOPT_RETURNTRANSFER] = true;
        }

        $this->curlClient = curl_init();
        curl_setopt_array($this->curlClient, $curlOptions);

        $this->headerContents = @fopen('php://memory', 'rw+');
        $this->errorResponseBody = @fopen('php://memory', 'rw+');

        $httpResponse = curl_exec($this->curlClient);

        rewind($this->headerContents);
        $header = stream_get_contents($this->headerContents);

        $parsedHeader = $this->parseHttpHeader($header);

        $responseHeaderMetadata = new ResponseHeaderMetadata(
            $parsedHeader['x-mws-request-id'],
            $parsedHeader['x-mws-response-context'],
            $parsedHeader['x-mws-timestamp']);

        $code = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // Only attempt to verify the Content-MD5 value if the request was successful.
        if (RequestType::getRequestType($action) === RequestType::POST_DOWNLOAD) {
            if ($code != 200) {
                rewind($this->errorResponseBody);
                $httpResponse =  stream_get_contents($this->errorResponseBody);
            } else {
                $this->verifyContentMd5($this->getParsedHeader($parsedHeader,'Content-MD5'), $dataHandle);
                $httpResponse = $this->getDownloadResponseDocument($action, $parsedHeader);
            }
        }

        // Cleanup open streams and cURL instance.
        @fclose($this->headerContents);
        @fclose($this->errorResponseBody);
        curl_close($this->curlClient);

        return array (
            'Status' => $code,
            'ResponseBody' => $httpResponse,
            'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

    private function getParsedHeader($parsedHeader, $key)
    {
        return $parsedHeader[strtolower($key)];
    }

    /**
     * Compares the received Content-MD5 Hash value from the response with a locally calculated
     * value based on the contents of the response body. If the received hash value doesn't match
     * the locally calculated hash value, an exception is raised.
     *
     * @param $receivedMd5Hash
     * @param $streamHandle
     * @return unknown_type
     */
    private function verifyContentMd5($receivedMd5Hash, $streamHandle)
    {
        rewind($streamHandle);
        $expectedMd5Hash = $this->getContentMd5($streamHandle);
        rewind($streamHandle);

        if (!($receivedMd5Hash === $expectedMd5Hash)) {
            throw new Exception(
                array(
                    'Message' => 'Received Content-MD5 = ' . $receivedMd5Hash . ' but expected ' . $expectedMd5Hash,
                    'ErrorCode' => 'ContentMD5DoesNotMatch'));
        }
    }

    /**
     * Build an associative array of an HTTP Header lines. For requests, the HTTP request line
     * is not contained in the array, nor is the HTTP status line for response headers.
     *
     * @param $header
     * @return array
     */
    private function parseHttpHeader($header)
    {
        $parsedHeader = array ();
        foreach (explode("\n", $header) as $line) {
            $splitLine = preg_split('/:\s/', $line, 2, PREG_SPLIT_NO_EMPTY);

            if (sizeof($splitLine) == 2) {
                $k = strtolower(trim($splitLine[0]));
                $v = trim($splitLine[1]);
                if (array_key_exists($k, $parsedHeader)) {
                    $parsedHeader[$k] = $parsedHeader[$k] . "," . $v;
                } else {
                    $parsedHeader[$k] = $v;
                }
            }
        }

        return $parsedHeader;
    }

    /**
     * cURL callback to write the response HTTP body into a stream. This is only intended to be used
     * with RequestType::POST_DOWNLOAD request types, since the responses can potentially become
     * large.
     *
     * @param $ch - The curl handle.
     * @param $string - body portion to write.
     * @return int - number of byes written.
     */
    private function responseCallback($ch, $string)
    {
        $httpStatusCode = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // For unsuccessful responses, i.e. non-200 HTTP responses, we write the response body
        // into a separate stream.
        $responseHandle;
        if ($httpStatusCode == 200) {
            $responseHandle = $this->responseBodyContents;
        } else {
            $responseHandle = $this->errorResponseBody;
        }

        return fwrite($responseHandle, $string);
    }

    /**
     * cURL callback to write the response HTTP header into a stream.
     *
     * @param $ch - The curl handle.
     * @param $string - header portion to write.
     * @return int - number of bytes written to stream.
     */
    private function headerCallback($ch, $string)
    {
        $bytesWritten = fwrite($this->headerContents, $string);
        return $bytesWritten;
    }

    /**
     * Gets cURL options common to all MWS requests.
     * @return unknown_type
     */
    private function getDefaultCurlOptions()
    {
        return array (
            CURLOPT_POST => true,
            CURLOPT_USERAGENT => $this->config['UserAgent'],
            CURLOPT_VERBOSE => true,
            CURLOPT_HEADERFUNCTION => array ($this, 'headerCallback'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2
        );
    }

    /**
     * Configures specific curl options based on the request type.
     *
     * @param $action
     * @param $parameters
     * @param $streamHandle
     * @return array
     */
    private function configureCurlOptions($action, array $converted, $streamHandle = null, $contentMd5 = null)
    {
        $curlOptions = $this->getDefaultCurlOptions();

        if (!is_null($this->config['ProxyHost'])) {
            $proxy = $this->config['ProxyHost'];
            $proxy .= ':' . ($this->config['ProxyPort'] == -1 ? '80' : $this->config['ProxyPort']);

            $curlOptions[CURLOPT_PROXY] = $proxy;
        }

        $serviceUrl = $this->config['ServiceURL'];

        // append the '/' character to the end of the service URL if it doesn't exist.
        if (!(substr($serviceUrl, strlen($serviceUrl) - 1) === '/')) {
            $serviceUrl .= '/';
        }

        $requestType = RequestType::getRequestType($action);

        if ($requestType == RequestType::POST_UPLOAD) {

            if (is_null($streamHandle) || !is_resource($streamHandle)) {
                throw new Exception(array ('Message' => 'Missing stream resource.'));
            }

            $serviceUrl .= '?' . $this->getParametersAsString($converted[CONVERTED_PARAMETERS_KEY]);

            $curlOptions[CURLOPT_URL] = $serviceUrl;

            $header[] = 'Expect: ';
            $header[] = 'Accept: ';
            $header[] = 'Transfer-Encoding: chunked';
            $header[] = 'Content-MD5: ' . $contentMd5;

            $curlOptions[CURLOPT_HTTPHEADER] = array_merge($header, $converted[CONVERTED_HEADERS_KEY]);

            rewind($streamHandle);
            $curlOptions[CURLOPT_INFILE] = $streamHandle;

            $curlOptions[CURLOPT_UPLOAD] = true;

            $curlOptions[CURLOPT_CUSTOMREQUEST] = self::REQUEST_TYPE;

        } else if (!($requestType === RequestType::UNKNOWN)) {
            $curlOptions[CURLOPT_URL] = $this->config['ServiceURL'];
            $curlOptions[CURLOPT_POSTFIELDS] = $this->getParametersAsString($converted[CONVERTED_PARAMETERS_KEY]);

            if ($requestType == RequestType::POST_DOWNLOAD) {
                $this->responseBodyContents = $streamHandle;
                $curlOptions[CURLOPT_WRITEFUNCTION] = array ($this, 'responseCallback');
            }
        } else {
            throw new InvalidArgumentException("$action is not a valid request type.");
        }

        return $curlOptions;
    }

    /**
     * For RequestType::POST_DOWNLOAD actions, construct a response containing the Amazon Request ID
     * and Content MD5 header value.
     *
     * @param $responseType
     * @param $header
     * @return unknown_type
     */
    private function getDownloadResponseDocument($responseType, $header)
    {
        $md5 = $this->getParsedHeader($header, 'Content-MD5');
        $requestId = $this->getParsedHeader($header, 'x-amz-request-id');

        $response = '<' . $responseType . 'Response xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';

        $response .= '<' . $responseType . 'Result>';
        $response .= '<ContentMd5>';
        $response .= $md5;
        $response .= '</ContentMd5>';
        $response .= '</' . $responseType . 'Result>';
        $response .= '<ResponseMetadata>';
        $response .= '<RequestId>';
        $response .= $requestId;
        $response .= '</RequestId>';
        $response .= '</ResponseMetadata>';
        $response .= '</' . $responseType . 'Response>';

        return $response;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function calculateStringToSignV2(array $parameters, $queuepath = null)
    {
        $parsedUrl = parse_url($this->config['ServiceURL']);
        $endpoint = $parsedUrl['host'];
        if (isset($parsedUrl['port']) && !is_null($parsedUrl['port'])) {
            $endpoint .= ':' . $parsedUrl['port'];
        }

        $data = 'POST';
        $data .= "\n";
        $data .= $endpoint;
        $data .= "\n";
        if ($queuepath) {
            $uri  = $queuepath;
        } else {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);

        return $data;
    }

    /**
     * Returns a ISO 8601 formatted string from a DateTime instance.
     */
    private function getFormattedTimestamp($dateTime)
    {
        if (!is_object($dateTime)) {
            if (is_string($dateTime)) {
                $dateTime = new DateTime($dateTime);
            } else {
                throw new Exception("Invalid date value.");
            }
        } else {
            if (!($dateTime instanceof DateTime)) {
                throw new Exception("Invalid date value.");
            }
        }

        return $dateTime->format(DATE_ISO8601);
    }

    /**
     * Convert SubmitFeedRequest to name value pairs
     */
    private function convertSubmitFeed($request)
    {
        $parameters = array();
        $parameters['Action'] = 'SubmitFeed';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMarketplaceIdList()) {
            $marketplaceIdList = $request->getMarketplaceIdList();
            foreach  ($marketplaceIdList->getId() as $idIndex => $id) {
                $parameters['MarketplaceIdList.Id.'.($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetFeedType()) {
            $parameters['FeedType'] =  $request->getFeedType();
        }
        if ($request->isSetPurgeAndReplace()) {
            $parameters['PurgeAndReplace'] =  $request->getPurgeAndReplace() ? "true" : "false";
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        $headers = array();
        array_push($headers, "Content-Type: " . $request->getContentType()->toString());

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $headers);
    }

    /**
     * Convert GetFeedSubmissionListByNextTokenRequest to name value pairs
     */
    private function convertGetFeedSubmissionListByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFeedSubmissionListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert CancelFeedSubmissionsRequest to name value pairs
     */
    private function convertCancelFeedSubmissions($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CancelFeedSubmissions';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionIdList()) {
            $feedSubmissionIdList = $request->getFeedSubmissionIdList();
            foreach  ($feedSubmissionIdList->getId() as $idIndex => $id) {
                $parameters['FeedSubmissionIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach  ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
                $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
                $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetFeedSubmissionCountRequest to name value pairs
     */
    private function convertGetFeedSubmissionCount($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFeedSubmissionCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach  ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetFeedProcessingStatusList()) {
            $feedProcessingStatusList = $request->getFeedProcessingStatusList();
            foreach  ($feedProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['FeedProcessingStatusList' . '.' . 'Status' . '.'  . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
                $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
                $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetFeedSubmissionResultRequest to name value pairs
     */
    private function convertGetFeedSubmissionResult($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFeedSubmissionResult';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionId()) {
            $parameters['FeedSubmissionId'] =  $request->getFeedSubmissionId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetFeedSubmissionListRequest to name value pairs
     */
    private function convertGetFeedSubmissionList($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetFeedSubmissionList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetFeedSubmissionIdList()) {
            $feedSubmissionIdList = $request->getFeedSubmissionIdList();
            foreach  ($feedSubmissionIdList->getId() as $idIndex => $id) {
                $parameters['FeedSubmissionIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetFeedTypeList()) {
            $feedTypeList = $request->getFeedTypeList();
            foreach  ($feedTypeList->getType() as $typeIndex => $type) {
                $parameters['FeedTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetFeedProcessingStatusList()) {
            $feedProcessingStatusList = $request->getFeedProcessingStatusList();
            foreach  ($feedProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['FeedProcessingStatusList' . '.' . 'Status' . '.'  . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetSubmittedFromDate()) {
            $parameters['SubmittedFromDate'] =
                $this->getFormattedTimestamp($request->getSubmittedFromDate());
        }
        if ($request->isSetSubmittedToDate()) {
            $parameters['SubmittedToDate'] =
                $this->getFormattedTimestamp($request->getSubmittedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

}
