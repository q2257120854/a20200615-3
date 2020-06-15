<?php

$timezone = ini_get('date.timezone');

if(empty($timezone))
{
    ini_set('date.timezone', 'UTC');
}
