<?php
require_once 'vendor/autoload.php';

use Crystal\CatBowl\Bowl;
use Crystal\CatBowl\Cat;

$bowl = new Bowl(1000);

$cat1 = new Cat('Murka');
$cat2 = new Cat('Barsik');

$cat1->eat($bowl, 500);
$cat2->eat($bowl, 500);

//implement error
$cat1->eat($bowl, 100);

$bowl->addFoodAmount(150);
$cat1->eat($bowl, 100);

