<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function test_that_values_divisible_by_only_three_are_represented_as_Fizz()
    {
        $this->assertEquals('Fizz', (string)(new FizzBuzz(3)));
    }

    public function test_that_values_divisible_by_only_five_are_represented_as_Buzz()
    {
        $this->assertEquals('Buzz', (string)(new FizzBuzz(5)));
    }

    public function test_that_values_divisible_by_both_three_and_five_are_represented_as_FizzBuzz()
    {
        $this->assertEquals('FizzBuzz', (string)(new FizzBuzz(15)));
    }

    public function test_that_values_not_divisible_by_three_or_five_are_represented_as_their_individual_value()
    {
        $this->assertEquals('1', (string)(new FizzBuzz(1)));
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
