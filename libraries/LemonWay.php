<?php
/**
 * Class for Lemon Way
 * @package default
 */
class LemonWay {

    /**
     * @var string API key
     * @access protected
     */
	protected $_apiKey;
   
    /**
     * @var string API access token
     * @access protected
     */
	protected $_accessToken;

    /**
     * @var string API protocol
     * @access protected
     */
	protected $_protocol;

    /**
     * @var string API hostname
     * @access protected
     */
	protected $_hostname;

    /**
     * @var string API resource path
     * @access protected
     */
	protected $_resource;

    /**
     * @var string API version
     * @access protected
     */
	protected $_version;

    /**
     * @var resource $conn The client connection instance to use.
     * @access private
     */
    private $conn = null;

    /**
     * @var array (optional) cURL connection options
     * @access protected
     */
    protected $_connectionOptions;

    /**
     * @const SurveyMonkey Status code:  Success
     */
    const SM_STATUS_SUCCESS = 0;

    /**
     * @const HTTP response code: Success
     */
    const HTTP_RESPONSE_CODE_SUCCESS = 200;

    
}