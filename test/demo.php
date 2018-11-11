<?php

require_once '../Classes/RalColorChart.php';

$colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();

echo 'Ordered List' . PHP_EOL;
$colors = $colorChart->getList();
foreach ($colors as $color) {
    echo 'Color: ' . $color['number'] . ' Index: ' . $color['rangeindex'] . ' Name: ' . $color['nameEnglish'] . PHP_EOL;
}
