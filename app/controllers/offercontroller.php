<?php
require_once '../models/Offer.php';

class OfferController {
    private $offerModel;

    public function __construct() {
        $this->offerModel = new Offer();
    }

    public function compareOffers($property_id) {
        $offers = $this->offerModel->getOffersForProperty($property_id);
        include '../views/admin/offer_comparison.php';
    }
}
?>
