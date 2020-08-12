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
        $this->assertNotEmpty(RalColorChart::getColor('RAL 2001'));
        $this->assertEmpty(RalColorChart::getColor('RAL DoesNotExist 1337'));
        $this->assertContains('Signalorange', RalColorChart::getColor('RAL 2010'));
    }
}
