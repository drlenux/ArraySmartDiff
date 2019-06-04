<?php

use PHPUnit\Framework\TestCase;
use DrLenux\ArraySmartDiff\ArrayDiff;

/**
 * Class ArrayDiffTest
 */
class ArrayDiffTest extends TestCase
{
    /**
     * @param array $arrays
     * @param $expected
     * @dataProvider dataProviderForDiff
     */
    public function testDiff(array $arrays, $expected)
    {
        $actual = ArrayDiff::getDiff(...$arrays);
        $this->assertEquals($expected, $actual);
    }

    public function dataProviderForDiff()
    {
        yield [
            [
                ['a' => 1, 'b' => 2, 'd' => 4],
                ['a' => 2, 'b' => 2, 'c' => 3]
            ],
            ['a' => ['new' => 2, 'old' => 1], 'c' => ['new' => 3], 'd' => ['old' => 4]]
        ];

        yield [
            [
                ['a' => 1, 'b' => 2],
                ['a' => 1, 'c' => 2],
                ['a' => 2, 'd' => 3, 'c' => 1]
            ],
            [
                'a' => ['new' => 2],
                'c' => ['new' => 1],
                'd' => ['new' => 3],
                'b' => ['old' => 2]
            ]
        ];
        yield [
            [
                ['a' => 3, 'b' => 2],
                ['a' => 1, 'c' => 2],
                ['a' => 2, 'd' => 3, 'c' => 1]
            ],
            [
                'a' => ['new' => 2, 'old' => 3],
                'c' => ['new' => 1],
                'd' => ['new' => 3],
                'b' => ['old' => 2]
            ]
        ];
    }
}