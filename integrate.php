<?php

include_once '../etvo-manage/const.php';
include_once CONTROL_DIR . '/util.php';


define('HOME_DIR', 'web/');

// Home URL
define(
    'HOME_URL',
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off')
        ? 'https'
        : 'http'
        . '://' . $_SERVER['SERVER_NAME'] . '/' . HOME_DIR
);
