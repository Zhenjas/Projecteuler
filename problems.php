<?php

Class ProjectEuler
{
    const UPPER_LIMIT_ONE = 1000;
    const UPPER_LIMIT_TWO = 3000000;

    public function problemOne()
    {
        $res = 0;

        for ($i = 1; $i < self::UPPER_LIMIT_ONE; $i++) {
            if (($i % 3 == 0) || ($i % 5 == 0)) {
                $res += $i;
            }
        }

        return $res;
    }

    public function problemTwo()
    {
        $x = 0;
        $y = 1;
        $countEvenNums = 0;
        while (true) {
            $z = $x + $y;

            if ($z % 2 === 0) {
                $countEvenNums += $z;
            }

            if ($z > self::UPPER_LIMIT_TWO) {
                return $countEvenNums;
                break;
            }

            $x = $y;
            $y = $z;
        }
    }
}

$pe = new ProjectEuler();

echo "Answer for problem 1 = " . $pe->problemOne() . "\n";
echo "Answer for problem 2 = " . $pe->problemTwo();
