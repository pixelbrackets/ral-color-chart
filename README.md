# RAL Color Chart

[![Version](https://img.shields.io/packagist/v/pixelbrackets/ral-color-chart.svg?style=flat-square)](https://packagist.org/packages/pixelbrackets/ral-color-chart/)
[![Build Status](https://img.shields.io/gitlab/pipeline/pixelbrackets/ral-color-chart?style=flat-square)](https://gitlab.com/pixelbrackets/ral-color-chart/pipelines)
[![Made With](https://img.shields.io/badge/made_with-php-blue?style=flat-square)](https://gitlab.com/pixelbrackets/ral-color-chart#requirements)
[![License](https://img.shields.io/badge/license-gpl--2.0--or--later-blue.svg?style=flat-square)](https://spdx.org/licenses/GPL-2.0-or-later.html)

This package provides a static list of [RAL Classic](https://www.ral-farben.de/) Colors.

The object returns an array which contains the RAL Number, Range Index, 
English Name, German Name and a compatible Hex Color Code.

![Screenshot](docs/screenshot.png)

## Requirements

- PHP

## Installation

Packagist Entry https://packagist.org/packages/pixelbrackets/ral-color-chart/

## Source

https://gitlab.com/pixelbrackets/ral-color-chart/

## Usage

See [tests/demo.php](./tests/demo.php)

1. Get an array with all RAL Classic Colors
   ```php
   $colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();
   $colors = $colorChart->getColors();
   ```
    Or as static method call
   ```php
   $colors = \Pixelbrackets\RalColorChart\RalColorChart::getColors();
   ```
1. Get an array with all RAL Classic Ranges
   ```php
   $ranges = \Pixelbrackets\RalColorChart\RalColorChart::getRanges();
   ```
1. Get an array with all RAL Classic Colors grouped by range index
   ```php
   $groupedColors = \Pixelbrackets\RalColorChart\RalColorChart::getColorsGroupedByRange();
   ```
1. Get an array of a single RAL Classic Color
   ```php
   $color = \Pixelbrackets\RalColorChart\RalColorChart::getColor('RAL 2010');
   ```

## License

GNU General Public License version 2 or later

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

## Author

Dan Untenzu (<mail@pixelbrackets.de> / [@pixelbrackets](https://pixelbrackets.de))

## Changelog

See [./CHANGELOG.md](CHANGELOG.md)

## Contribution

This script is Open Source, so please use, patch, extend or fork it.
