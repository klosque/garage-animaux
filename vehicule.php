
<?php



class Vehicule
{
	
	protected $Nb_pass=0;
	protected $Nb_km=0;
	

	public function setNb_pass($pass)
	{
		$this->$Nb_pass = $pass;
	}
	public function getNb_pass()
	{
		return $this->$Nb_pass;
	}

	public function setNb_km($km)
	{
		$this->$Nb_km += $km;
	}

	public function getNb_km()
	{
		return $this->$Nb_km;
	}


	public function monter($nb)
	{
		return $this->$Nb_pass += $nb;
	}

	public function descendre($nb)
	{
		return $this->$Nb_pass -= $nb;
	}
}


?>