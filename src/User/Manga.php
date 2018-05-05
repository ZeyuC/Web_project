<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 30/04/18
 * Time: 18:15
 */
namespace User;


class Manga
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var int
     */
    private $note ;

    /**
     * @var int
     */
    private $nb_note;

    /**
     * @var int
     */
    private $nb_chap ;

    /**
     * @var \DateTimeInterface
     */
    private $debut;

    /**
     * @var \DateTimeInterface
     */
    private $fin ;

    /*********** Getters and setters ************/

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param int $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getNbNote()
    {
        return $this->nb_note;
    }

    /**
     * @param int $nb_note
     */
    public function setNbNote($nb_note)
    {
        $this->nb_note = $nb_note;
    }

    /**
     * @return int
     */
    public function getNbChap()
    {
        return $this->nb_chap;
    }

    /**
     * @param int $nb_chap
     */
    public function setNbChap($nb_chap)
    {
        $this->nb_chap = $nb_chap;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param \DateTimeInterface $debut
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param \DateTimeInterface $fin
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    }

}