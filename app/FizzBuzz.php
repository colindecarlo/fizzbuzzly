<?php

namespace App;

class FizzBuzz implements \JsonSerializable
{
    private $id;

    public function __construct($id)
    {
        if ($id < 1 || $id > 100) {
            throw new \InvalidArgumentException('Invalid value: ' . $id);
        }

        $this->id = $id;
    }

    function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'value' => (string)$this
        ];
    }

    private function isFizzBuzz()
    {
        return $this->isFizz() && $this->isBuzz();
    }

    private function isFizz()
    {
        return $this->id % 3 == 0;
    }

    private function isBuzz()
    {
        return $this->id % 5 == 0;
    }

    public function __toString()
    {
        return collect(['FizzBuzz', 'Fizz', 'Buzz'])->first(function ($method) {
            return call_user_func([$this, 'is' . $method]);
        }, (string)$this->id);
    }
}
