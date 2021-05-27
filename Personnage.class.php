<?php
class Personnage
{
    public $_nom;
    public $_prenom;
    public $_age;
    public $_sexe;

public function getNom()
{
    return $this->_nom;
}
public function setNom()
{
    return $this->_nom = $sNom;
}
public function getPrenom()
{
    return $this->_prenom;
}
public function setPrenom()
{
    return $this->_prenom = $sPrenom;
}
public function getAge()
{
    return $this->_age;
}
public function setAge()
{
    return $this->_age = $sAge;
}
    public function getSexe()
{
    return $this->_sexe;
}
public function setSexe() 
{
    return $this->_age = $sAge;
}
}
?>