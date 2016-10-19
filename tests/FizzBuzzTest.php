<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function test_that_it_maps_numbers_to_expected_values()
    {
        $values = [
            1 => '1',
            3 => 'Fizz',
            5 => 'Buzz',
            15 => 'FizzBuzz'
        ];

        foreach ($values as $number => $expected) {
            $this->assertEquals($expected, (string)(new FizzBuzz($number)));
        }
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Invalid value: 0
     */
    public function test_that_values_less_than_one_will_throw_an_InvalidArgument_exception()
    {
        new FizzBuzz(0);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Invalid value: 101
     */
    public function test_that_values_greater_than_one_hundred_will_throw_an_InvalidArgument_exception()
    {
        new FizzBuzz(101);
    }
}
