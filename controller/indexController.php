<?php
/**
 * Default Index Controller
 * User: Nilesh Sadarangani
 * Date: 03/07/14
 */

class indexController extends Controller {

    public function actionIndex()
    {
        /**
         * Generate card deck
         */
        $cardDeck = stackGenerator::generateStack();

        /**
         * Select two cards randomly
         */
        $selectedCards = array_rand($cardDeck, 2);

        /**
         * Calculate total
         */
        $blackjackCalculatorModel = new blackjackCalculator();
        $total = $blackjackCalculatorModel->calculateTotal($cardDeck, $selectedCards);
        /**
         * Render views for index page
         */
        $this->render('index/index', array(
            'selectedCards' => $selectedCards,
            'total' => $total
        ));
    }
}