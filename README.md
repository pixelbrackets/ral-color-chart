RAL Color Chart
===============

[![Packagist](https://img.shields.io/packagist/v/pixelbrackets/ral-color-chart.svg)](https://packagist.org/packages/pixelbrackets/ral-color-chart/)

This package provides a static table of [RAL Classic](https://www.ral-farben.de/) Colors.

The object may retun an array which contains the RAL Number, Range Index, 
English Name, German Name and a compatible Hex Color Code.

Requirements
------------

* PHP

Installation
------------

Packagist Entry https://packagist.org/packages/pixelbrackets/ral-color-chart/

Source
------

https://gitlab.com/pixelbrackets/ral-color-chart/

Usage
-----

1. Get a complete list of all RAL colors
   ```php
   $colorChart = new \Pixelbrackets\RalColorChart\RalColorChart();
   $colors = $colorChart->getList();
   ```

License
-------

GNU General Public License version 2 or later

The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html.

Author
------

Dan Untenzu (<mail@pixelbrackets.de> / [@pixelbrackets](https://pixelbrackets.de))

Changelog
---------

[./Changelog.md](./Changelog.md)

Contribution
------------

This script is Open Source, so please use, patch, extend or fork it.
