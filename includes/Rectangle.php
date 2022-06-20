<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the rectangle.
     */
    public function draw()
    {
        for ($i = 0; $i < ceil($this->sideLength / 2); $i++) {
            for ($j = 0; $j < $this->sideLength; $j++) {
                if (
                    $i == 0
                    || $j == 0
                    || $i == ceil($this->sideLength / 2) - 1
                    || $j == $this->sideLength - 1
                ) {
                    echo $this->pixel . $this->padding(2);
                } else {
                    echo $this->padding(4);
                }
            }
            $this->newLine();
        }
    }
}
