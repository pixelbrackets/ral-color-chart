<?php

require_once '../Classes/RalColorChart.php';

$colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();

echo 'Ordered List' . PHP_EOL;
$colors = $colorChart->getList();
foreach ($colors as $color) {
    echo 'Color: ' . $color['number'] . ' Index: ' . $color['rangeindex'] . ' Name: ' . $color['nameEnglish'] . PHP_EOL;
}

echo 'Grouped List' . PHP_EOL;
$colorGroups = $colorChart->getGroupedList();
$ranges = $colorChart->getRangeList();
foreach ($colorGroups as $colorIndex => $colorGroup) {
    echo 'Range ' . $colorIndex . ': ' . $ranges[$colorIndex]['nameEnglish'] . PHP_EOL;
    foreach ($colorGroup as $color) {
        echo 'Color: ' . $color['number'] . ' Index: ' . $color['rangeindex'] . ' Name: ' . $color['nameEnglish'] . PHP_EOL;
    }
}
