<?php
    $time = 1195248471;
    $eTag = 'quack';

    // _SERVER["HTTP_IF_NONE_MATCH"]
    if (isset($_SERVER['HTTP_IF_NONE_MATCH']))
    {
        $noneMatch = $_SERVER['HTTP_IF_NONE_MATCH'];
    }
    else
    {
        $noneMatch = '';
    }

    if ($noneMatch ==  $eTag)
    {
        header('304 Not Modified', true, 304);
    } else {
        header("ETag: $eTag");
    }
phpinfo(INFO_VARIABLES);
