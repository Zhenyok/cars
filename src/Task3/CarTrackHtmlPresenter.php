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
            $html .= '<h2>'.$car->getName().': '.$car->getSpeed().', '. $car->getFuelConsumption() . ' </h2>';
            $html .= '<img src="' . $car->getImage() . '">';
            $html .= '</li>';
        }

        $html .= '</ol><br>';
        $html .= '<h2 style="text-align: center">Winner</h2>';
        $winner = $track->run();
        $html .= '<div style="text-align: center"><h1 style="color: tomato">' . $winner->getName() . '</h1></div>';

        return $html;
    }
}