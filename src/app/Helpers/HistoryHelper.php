<?php

namespace App\Helpers;

use App\Core\Session;

class HistoryHelper {

    /* Mètode per renderitzar l'historial */
    public static function renderHistory($type) {
        $history = Session::get('history');
        $history_count = 0;
        echo '<div class="history">';
        echo '<h2>Historial de calculos</h2>';
        if (empty($history)) {
            echo "No existen resultados en el historial";
            return;
        }
        foreach ($history as $result) {
            if ($result->getType() == $type) {
                echo '<div>';
                echo $result->getExpression() . ' = ' . $result->getResult();
                echo '</div>';
                $history_count++;
            }
        }
        if ($history_count == 0) {
            echo "No existen resultados en el historial";
        }
        echo '</div>';
    }
    
}