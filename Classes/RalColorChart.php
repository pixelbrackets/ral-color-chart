<?php
namespace Pixelbrackets\RalColorChart;

class RalColorChart
{
    /**
     * The complete list of RAL Classic Colors
     *
     * @var array
     */
    protected $colors = [
        [
            'RAL1001',
            '1',
            'Red'
        ],
        [
            'RAL1002',
            '1',
            'Redish'
        ],
        [
            'RAL2001',
            '2',
            'Yellow'
        ],
        [
            'RAL3001',
            '3',
            'Purple'
        ]
    ];

    /**
     * Returns the list of RAL Classic Colors
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->colors;
    }
}
