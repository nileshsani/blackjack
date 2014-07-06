<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nileshsadarangani
 * Date: 04/07/14
 * Time: 1:29 AM
 * To change this template use File | Settings | File Templates.
 */

class blackjackCalculator {
    public function calculateTotal ($cardDeck, $selectedCards)
    {
        $total = 0;
        foreach ($selectedCards as $card) {
            $total = $total + $cardDeck[$card];
        }
        return $total;
    }
}