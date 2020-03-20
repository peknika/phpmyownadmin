<?php


namespace src\Core\Domain\Service;


class GenerateIdService
{
    public function makeId(array $attributes)
    {
        $time = time();
        $hashedAttrs = serialize($attributes);

        return $this->turnIntoInt($time, $hashedAttrs);
    }

    private function turnIntoInt($time, $attributes)
    {
        return sprintf('%010d%07d', $time, $attributes);
    }

}