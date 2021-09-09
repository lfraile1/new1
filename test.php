<?php

class Client{
    private string $nom = "";
    private string $prenom = "";
    private string $adresse = "";
    private string $email = "";
    private int $telephone = 0;
    private int $age = 0;

    public function __construct(string $nom, string $prenom, string $adresse, string $email, 
    int $telephone, int $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->age=$age;
    }
}