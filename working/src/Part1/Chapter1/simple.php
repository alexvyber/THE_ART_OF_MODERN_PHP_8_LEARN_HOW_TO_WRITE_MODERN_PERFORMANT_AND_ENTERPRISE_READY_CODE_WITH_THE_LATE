<?php

declare(strict_types=1);

namespace Book\Part1\Chapter1;

use Book\Part1\Chapter1\Simple\SimpleClass;
use Book\Part1\Chapter1\Simple\SimpleManualAssignment;

require __DIR__ . '/../../../vendor/autoload.php';

$instance = new SimpleClass();
echo "\n" . $instance->name; // Simon

$instance2 = new SimpleClass('Sally');
echo "\n" . $instance2->name; //Sally

$instance3 = new SimpleManualAssignment('Jhonny');
echo "\n" . $instance3->name; //Jhonny