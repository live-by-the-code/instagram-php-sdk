<?php
namespace Amirsarhang;

//session_start();
use Facebook\PersistentData\PersistentDataInterface;

class SessionPersistentDataHandler implements PersistentDataInterface
{
    protected $sessionPrefix = 'FBRLH_';
    
    public function get($key)
    {
        if (isset($_SESSION[$this->sessionPrefix . $key])) {
            return $_SESSION[$this->sessionPrefix . $key];
        }

        return null;
    }

    public function set($key, $value)
    {
        $_SESSION[$this->sessionPrefix . $key] = $value;
    }
}
