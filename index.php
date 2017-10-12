<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$array = array(
    'foo' => 'bar',
    'bar' => array('foo' => 'bar', 'bar' => 'baz'),
);

$yaml = Yaml::dump($array);

file_put_contents('ymlfile/file.yml', $yaml);

$value = Yaml::parse(file_get_contents('ymlfile/file.yml'));
