<?php

namespace Komay\PrtgBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="Komay\PrtgBundle\Repository\PersonneRepository")
 */
class Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inscription_date", type="datetime")
     */
    private $inscriptionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_connect_date", type="datetime")
     */
    private $lastConnectDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_disconnect_date", type="datetime")
     */
    private $lastDisconnectDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Personne
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set inscriptionDate
     *
     * @param \DateTime $inscriptionDate
     *
     * @return Personne
     */
    public function setInscriptionDate($inscriptionDate)
    {
        $this->inscriptionDate = $inscriptionDate;

        return $this;
    }

    /**
     * Get inscriptionDate
     *
     * @return \DateTime
     */
    public function getInscriptionDate()
    {
        return $this->inscriptionDate;
    }

    /**
     * Set lastConnectDate
     *
     * @param \DateTime $lastConnectDate
     *
     * @return Personne
     */
    public function setLastConnectDate($lastConnectDate)
    {
        $this->lastConnectDate = $lastConnectDate;

        return $this;
    }

    /**
     * Get lastConnectDate
     *
     * @return \DateTime
     */
    public function getLastConnectDate()
    {
        return $this->lastConnectDate;
    }

    /**
     * Set lastDisconnectDate
     *
     * @param \DateTime $lastDisconnectDate
     *
     * @return Personne
     */
    public function setLastDisconnectDate($lastDisconnectDate)
    {
        $this->lastDisconnectDate = $lastDisconnectDate;

        return $this;
    }

    /**
     * Get lastDisconnectDate
     *
     * @return \DateTime
     */
    public function getLastDisconnectDate()
    {
        return $this->lastDisconnectDate;
    }
}

