<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

print_r(Yaml::parseFile(__DIR__.'/test.yaml', Yaml::PARSE_CONSTANT));
