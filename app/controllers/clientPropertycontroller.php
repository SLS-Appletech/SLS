<?php
require_once '../models/Property.php';
require_once '../models/Offer.php';
session_start(); 

class ClientPropertyController {
    private $propertyModel;
    private $offerModel;

    public function __construct() {
        $this->propertyModel = new Property();
        $this->offerModel = new Offer();
    }

    public function listProperties() {
        $properties = $this->propertyModel->getAllAvailableProperties();
        include '../views/client/properties/index.php';
    }

    public function viewProperty($id) {
        $property = $this->propertyModel->getPropertyDetails($id);
        include '../views/client/properties/view.php';
    }

    public function makeOffer() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $property_id = $_POST['property_id'];
            $client_id = $_SESSION['user_id'];
            $offer_price = $_POST['offer_price'];

            $this->offerModel->makeOffer($property_id, $client_id, $offer_price);
            header("Location: offers.php");
        }
    }

    public function viewOffers() {
        $client_id = $_SESSION['user_id'];
        $offers = $this->offerModel->getClientOffers($client_id);
        include '../views/client/properties/offers.php';
    }
}
?>
