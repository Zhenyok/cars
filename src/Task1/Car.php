<?php

declare(strict_types=1);

namespace App\Task1;

/**
 * Class Car
 * @package App\Task1
 */
class Car
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $image;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $speed;

    /**
     * @var int
     */
    private int $pitStopTime;

    /**
     * @var float
     */
    private float $fuelConsumption;

    /**
     * @var float
     */
    private float $fuelTankVolume;

    /**
     * @var float
     */
    public float $spendTime;

    /**
     * Car constructor.
     * @param int $id
     * @param string $image
     * @param string $name
     * @param int $speed
     * @param int $pitStopTime
     * @param float $fuelConsumption
     * @param float $fuelTankVolume
     */
    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume
    ) {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getPitStopTime(): int
    {
        return $this->pitStopTime;
    }

    /**
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    /**
     * @return float
     */
    public function getFuelTankVolume(): float
    {
        return $this->fuelTankVolume;
    }

    /**
     * @param float $time
     */
    public function setSpendTime(float $time)
    {
        $this->spendTime = $time;
    }

    /**
     * @return float
     */
    public function getSpendTime(): float
    {
        return $this->spendTime;
    }
}