<?php

use CodeIgniter\Config\BaseConfig;

class Config extends BaseConfig
{
    public $baseURL = 'http://localhost:8080';
    public $indexPage = 'index.php';
    public $uriProtocol = 'REQUEST_URI';
    public $charset = 'UTF-8';
    public $encryptionKey = 'your-key-here';
    public $sessionDriver = 'CodeIgniter\Session\DatabaseSession';
    public $sessionCookieName = 'ci_session';
    // Add other configuration settings as necessary
}