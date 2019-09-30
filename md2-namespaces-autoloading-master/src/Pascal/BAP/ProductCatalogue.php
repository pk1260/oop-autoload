<?php
namespace Pascal\BAP;
class ProductCatalogue {

    private $catalogue;

	public function __construct($catalogue) {
        $this->catalogue = $catalogue;
	}

	public function getCatalogue()
{
    return 'De inhoud van het catalogue is: ' . $this->catalogue . '<br/>';
}

}