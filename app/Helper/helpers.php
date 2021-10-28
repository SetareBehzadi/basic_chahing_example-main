<?php
namespace App\Helper;




use Illuminate\Support\Facades\Request;

function serverName()
{
    $server_name = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['SERVER_PORT'];
    return 'http://' . $server_name . ':' . $port . '/';
}

function classActivePath($path)
{

    if (Request::segment(2) == $path) {
        return 'class="active"';
    } else {
        return '';
    }

}
