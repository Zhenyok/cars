<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
        $html = '<h2 style="text-align: center">Cars on the track (Length: ' . $track->getLapLength() . ' Number: ' . $track->getLapsNumber() . ')</h2>';
        $html .= '<ol style="display: flex; justify-content: center;">';

        foreach ($track->all() as $car) {
            $html .= '<li style="margin: 10px">';
            $html .= '<h3> Modal: ' . $car->getName() .
                    '<br> Speed: ' . $car->getSpeed() .
                    '<br> Consumption: ' . $car->getFuelConsumption() .
                    '<br> Tank: ' . $car->getFuelTankVolume().
                '</h3>';
            $html .= '<img src="' . $car->getImage() . '">';
            $html .= '</li>';
        }

        $html .= '</ol><br>';
        $html .= '<h2 style="text-align: center">Winner</h2>';
        $winner = $track->run();
        $html .= '<h2 style="text-align: center">' . $winner->getName() . '</h2>';
        $html .= '<div style="text-align: center"><img src="' . $winner->getImage() . '"></div>';

        return $html;
    }
}