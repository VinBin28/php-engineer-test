<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
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
     * Draws the Diamond.
     */
    public function draw()
    {
        for ($i = 0; $i < ($this->sideLength * 2) - 1; $i++) {
            for ($j = 0; $j < ($this->sideLength * 2) - 1; $j++) {
                if (
                    $j == ($this->sideLength - 1) - $i
                    || $j == ($this->sideLength - 1) + $i
                    || ($i > ($this->sideLength - 1) && $j == $i - ($this->sideLength - 1))
                    || ($i > ($this->sideLength - 1) && $j == (($this->sideLength * 2) - 2) - ($i - ($this->sideLength - 1)))
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
