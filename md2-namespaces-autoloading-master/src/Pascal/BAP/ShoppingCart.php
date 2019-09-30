<?php
namespace Pascal\BAP;
class ShoppingCart {

    private $inhoud;

	public function __construct($inhoud) {
        $this->inhoud = $inhoud;
	}

    public function getInhoud()
    {
        return 'De inhoud van je shopping card is: ' . $this->inhoud .  '<br/>';
    }
}