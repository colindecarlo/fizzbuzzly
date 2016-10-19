<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider validValuesProvider
     */
    public function test_that_it_maps_numbers_to_expected_values($number, $expected)
    {
        $this->assertEquals($expected, (string)(new FizzBuzz($number)));
    }

    public function validValuesProvider()
    {
        return [
            [1, '1'],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz']
        ];
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessageRegExp  /Invalid value: \d+/
     * @dataProvider invalidValuesProvider
     */
    public function test_that_out_of_bounds_values_will_throw_an_InvalidArgument_exception($number)
    {
        new FizzBuzz($number);
    }

    public function invalidValuesProvider()
    {
        return [
            [0],
            [101],
        ];
    }
}
