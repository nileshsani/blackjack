<?php
/**
 * Blackjack Calculator Model
 * Created by: Nilesh Sadarangani
 * Date: 04/07/14
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