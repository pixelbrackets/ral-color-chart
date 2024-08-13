<?php

use Pixelbrackets\RalColorChart\RalColorChart;
use PHPUnit\Framework\TestCase;

class RalColorChartTest extends TestCase
{
    public function testChartsAreNotEmpty()
    {
        $this->assertNotEmpty(RalColorChart::getColors());
        $this->assertIsArray(RalColorChart::getColors());

        $this->assertNotEmpty(RalColorChart::getRanges());
        $this->assertIsArray(RalColorChart::getRanges());

        $this->assertIsArray(RalColorChart::getColorsGroupedByRange());
    }

    public function testGetColor()
    {
        $this->assertEmpty(RalColorChart::getColor());
        $this->assertNotEmpty(RalColorChart::getColor('RAL 1000'));
        $this->assertEmpty(RalColorChart::getColor('RAL DoesNotExist 1337'));
        $this->assertContains('Signalorange', RalColorChart::getColor('RAL 2010'));
    }

    public function testHexValue()
    {
        $colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();
        $color = $colorChart->getColor('RAL 6024');
        $this->assertEquals('008754', $color['hex']);
    }
}
