<?php

require_once __DIR__ . '/UUID.php';

class Benevole
{
  public $id, $first_name, $last_name, $age, $genre, $phone, $email, $region, $dispo_jour, $dispo_horaire, $poste, $message, $date_inscription, $missions;

  public function __construct($first_name, $last_name, $age, $genre, $phone, $email, $region, $dispo_jour, $dispo_horaire, $poste, $message)
  {
    $this->id = UUID::v4();
    $this->date_inscription = date("d-m-Y");
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
    $this->genre = $genre;
    $this->phone = $phone;
    $this->email = $email;
    $this->region = $region;
    $this->dispo_jour = $dispo_jour;
    $this->dispo_horaire = $dispo_horaire;
    $this->poste = $poste;
    $this->message = $message;
    $this->missions = "";
  }

  function get_array_from_benevole()
  {
    return ['id' => $this->id, 'first_name' => $this->first_name, 'last_name' => $this->last_name, 'age' => $this->age, 'genre' => $this->genre, 'phone' => $this->phone, 'email' => $this->email, 'region' => $this->region, 'dispo_jour' => $this->dispo_jour, 'dispo_horaire' => $this->dispo_horaire, 'poste' => $this->poste, 'message' => $this->message, 'date_inscription' => $this->date_inscription, $this->missions];
  }

  // J'ai supprimé les getters et setters pour cette classe car je n'en ai pas eu besoin. Ils sont quand-même visibles dans d'anciens commit
}
