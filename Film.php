
<?php


class Film
{
	// déclaration
    // titre, leur date de sortie en France, leur durée (en minutes) ,
    // resume synopsis Un synopsis est un écrit décrivant la totalité ou un aperçu d'une œuvre ou d'une science. Le terme est essentiellement connu pour son usage cinématographique.
    //ainsi que leur réalisateur r (unique, avec nom, prénom, sexe et date de naissance).
    //cinématographique (science-fiction, aventure, action, ...).

    private string $_titre;
    private string $_dateSortie;///france
    private int $_dureeMinutes ;
	private string $_synopsis;
    private Realisateur $_realisateur;
    private string $_cinematographique;

    private array $_listCasting;
    
	public function __construct($titre , $dateSortie,$dureeMinutes,$synopsis,$cinematographique,$realisateur)
	{
		
        $this->_titre = $titre;
        $this->_dureeMinutes = $dureeMinutes;
        $this->_synopsis = $synopsis;
        $this->_cinematographique = $cinematographique;
        $this->_realisateur = $realisateur;
                
		
	}


    /**
     * Get the value of _titre
     */
    public function getTitre(): string
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     */
    public function setTitre(string $_titre)
    {
        $this->_titre = $_titre;
    }

    /**
     * Get the value of _dateSortie
     */
    public function getDateSortie(): string
    {
        return $this->_dateSortie;
    }

    /**
     * Set the value of _dateSortie
     */
    public function setDateSortie(string $_dateSortie): self
    {
        $this->_dateSortie = $_dateSortie;

        return $this;
    }

    /**
     * Get the value of _dureeMinutes
     */
    public function getDureeMinutes(): int
    {
        return $this->_dureeMinutes;
    }

    /**
     * Set the value of _dureeMinutes
     */
    public function setDureeMinutes(int $_dureeMinutes){
        $this->_dureeMinutes = $_dureeMinutes;

    }

	/**
	 * Get the value of _synopsis
	 */
	public function getSynopsis(): string
	{
		return $this->_synopsis;
	}

	/**
	 * Set the value of _synopsis
	 */
	public function setSynopsis(string $_synopsis)	{
		$this->_synopsis = $_synopsis;
	}

    /**
     * Get the value of _realisateur
     */
    public function getRealisateur(): Realisateur
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     */
    public function setRealisateur(Realisateur $_realisateur)    {
        $this->_realisateur = $_realisateur;
    }

    /**
     * Get the value of _cinematographique
     */
    public function getCinematographique(): string
    {
        return $this->_cinematographique;
    }

    /**
     * Set the value of _cinematographique
     */
    public function setCinematographique(string $_cinematographique){
        $this->_cinematographique = $_cinematographique;
    }

    public function getListCasting(): array
    {
        return $this->_listCasting;
    }

    public function setListCasting(array $_listCasting){
        $this->_listCasting = $_listCasting;
    }

    public function __toString()
	{
		$ecrire = $this->_titre ." " . $this->_titre;
		echo "<br>";
		return $ecrire;
	}

    public function ajoutCasting( Cast $cast)
	{
		//ajouter un element a la list des livres
		$this->_listCasting [] = $cast;
        return $this;
	}


    

    
}



