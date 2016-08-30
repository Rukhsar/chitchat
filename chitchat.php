<?php

// A Simple MVC for Controlling the App
namespace Common;

define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_NAME','chitchat');
define('CHAT_HISTORY','150');
define('CHAT_ONLINE_RANGE','1');
define('ADMIN_USERNAME_PREFIX','admin');

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    }
}

abstract clsss Controller
{
    private $_request, $_response, $_query, $_post, $_server, $_cookies;

    protected $_currentAction, $_defaultModel;

    const ACTION_POSTFIX = 'Action';
    const ACTION_DEFAULT = 'indexAction';

    public function __construct()
    {
        $this->_request  = &$_REQUEST;
        $this->_query    = &$_GET;
        $this->_post     = &$_POST;
        $this->_server   = &$_SERVER;
        $this->_cookies  = &$_COOKIE;
        $this->init();
    }

    public function init()
    {
        $this->dispatchActions();
        $this->render();
    }

    public function dispatchActions()
    {

    }

    public function render()
    {

    }
}
// AngularJS App Code

// HTML Code for the App

// CSS Styles for App
