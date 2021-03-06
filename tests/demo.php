<?php

require __DIR__ . '/../vendor/autoload.php';

$colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();

echo PHP_EOL . '*List*' . PHP_EOL;
$colors = $colorChart->getColors();
foreach ($colors as $color) {
    echo 'Color: ' . $color['number'] . ' Index: ' . $color['rangeindex'] . ' Name: ' . $color['nameEnglish'] . PHP_EOL;
}

echo PHP_EOL . '*Grouped List*' . PHP_EOL;
$colorGroups = $colorChart->getColorsGroupedByRange();
$ranges = $colorChart->getRanges();
foreach ($colorGroups as $colorIndex => $colorGroup) {
    echo 'Range ' . $colorIndex . ': ' . $ranges[$colorIndex]['nameEnglish'] . PHP_EOL;
    foreach ($colorGroup as $color) {
        echo '  Color: ' . $color['number'] . ' Index: ' . $color['rangeindex'] . ' Name: ' . $color['nameEnglish'] . PHP_EOL;
    }
}

echo PHP_EOL . '*Single color, as JSON data*' . PHP_EOL;
$color = \Pixelbrackets\RalColorChart\RalColorChart::getColor('RAL 2010');
echo json_encode($color, JSON_PRETTY_PRINT);
