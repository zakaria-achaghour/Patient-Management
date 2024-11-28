<?php

class BaseController
{
    public function __construct()
    {
        session_start();
    }

    protected function setFlash(string $key, string $message)
    {
        $_SESSION['flash'][$key] = $message;
    }

    protected function getFlash(string $key)
    {
        if (isset($_SESSION['flash'][$key])) {
            $message = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $message;
        }

        return null;
    }
}
