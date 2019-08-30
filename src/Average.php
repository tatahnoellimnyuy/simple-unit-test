<?php

namespace sampleUnitTestExample;

class Average
{
    /**
     * Calculate the mean average
     *
     * @param array $numbers Array of numbers
     *
     * @return float Mean average
     */
    public function mean(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Calculate the median average
     *
     * @param array $numbers Array of numbers
     *
     * @return float Median average
     */
    public function median(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean(
                array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }

    /**
     * @param array $numbers
     *
     * @return false|int|string
     */
    public function mode(array $numbers)
    {
        $values = array_count_values($numbers);

        return array_search(max($values), $values);
    }
}
