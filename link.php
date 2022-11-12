<?php

function redirect($url): void
{
    header('Location: ' . $url, true, 301);
    exit();
}