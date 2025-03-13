<?php>
class Offer {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function makeOffer($property_id, $client_id, $offer_price) {
        return $this->db->execute(
            "INSERT INTO offers (property_id, client_id, offer_price) VALUES (?, ?, ?)",
            [$property_id, $client_id, $offer_price]
        );
    }

    public function getClientOffers($client_id) {
        return $this->db->fetchAll("SELECT * FROM offers WHERE client_id = ?", [$client_id]);
    }
}
??