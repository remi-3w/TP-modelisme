

<?php


class Personnage 
{

    private $_degats = 20;
    private $_experience = 0;
    private $_force= 50;
    private $_name = "inconnu";


    public function frapper(Personnage $persoAFrapper)
    {
      $persoAFrapper->_degats += $this->_force;
    }

    public function name()
    {
        return $this ->_name;
    }

    

    public function Upxp()
    {
        $this->_experience++;
    }

    public function setForce($force)
    {
      if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
      {
        trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
        return;
      }
      
      if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
      {
        trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
        return;
      }
      
      $this->_force = $force;
    }

//Mutateur pour modifier l'attribut name
    public function setname($name)
    {
      if (!is_string($name)) // S'il ne s'agit pas d'une chaine de cahartcère.
      {
        trigger_error('Le nom du personnage doit être des lettres', E_USER_WARNING);
        return;
      }
      
     
      
      $this->_name = $name;
    }









    // Mutateur chargé de modifier l'attribut $_experience.
  public function setExperience($experience)
  {
    if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }
    
    if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }
    
    $this->_experience = $experience;
  }




     // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
    public function degats()
    {
      return $this->_degats;
    }
        
    // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
    public function force()
    {
        return $this->_force;
    }
        
    // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
    public function experience()
    {
        return $this->_experience;
    }
}

?>

<?php
$merlin = new Personnage;
$mordred = new Personnage;

$merlin -> setForce(10);
$merlin->setExperience(23);
$merlin->setName('Merlin');
$merlin->setForce(90);


$mordred->setExperience(58);
$mordred->setName('mordred');
$mordred->setForce(80);


$merlin->frapper($mordred);  // $merlin frappe $mordred
$merlin->Upxp(); // $merlin gagne de l'expérience

$mordred->frapper($merlin);  // $mordred frappe $merlin
$mordred->Upxp(); // $mordred gagne de l'expérience

echo  $merlin->name(), ' a ', $merlin->force(), ' de force, contrairement à ', $mordred->name(), ' qui ', $mordred->force(), ' de force.<br />';
echo $merlin->name(), ' a ', $merlin->experience(), ' d\'expérience, contrairement a ', $mordred->name(), ' qui a ', $mordred->experience(), ' d\'expérience.<br />';
echo $merlin->name(), ' a ', $merlin->degats(), ' de dégâts, contrairement a ', $mordred->name(), ' qui a ', $mordred->degats(), ' de dégâts.<br />';

?>

