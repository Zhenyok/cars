<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
    /**
     * @var float
     */
    private float $lapLength;

    /**
     * @var int
     */
    private int $lapsNumber;

    /**
     * @var array
     */
    protected $cars = [];

    /**
     * Track constructor.
     * @param float $lapLength
     * @param int $lapsNumber
     */
    public function __construct(float $lapLength, int $lapsNumber)
    {
        $this->lapLength = $lapLength;
        $this->lapsNumber = $lapsNumber;
    }

    /**
     * @return float
     */
    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    /**
     * @return int
     */
    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    /**
     * @param Car $car
     */
    public function add(Car $car): void
    {
        $this->cars[] = $car;
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->cars;
    }

    /**
     * @return Car
     */
    public function run(): Car
    {
        $result = [];
        $winner = null;

        foreach ($this->all() as $k => $car) {
            $trackLength = $this->lapsNumber * $this->lapLength;
            $travelTime = round($trackLength / $car->getSpeed(), 3) * 60;
            $countPitStop = ceil($trackLength / ($car->getFuelTankVolume() / $car->getFuelConsumption() * 100));
            $travelTime += $countPitStop * $car->getPitStopTime() / 60;
            $car->setSpendTime($travelTime);

            if (is_null($winner) || $winner->getSpendTime() > $car->getSpendTime()) {
                $winner = $car;
            }
        }

        return $winner;
    }
}
