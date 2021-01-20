<?php
namespace Models;
use Doctrine\ORM\Mapping as ORM;
class Employer
/**
 * @ORM\Entity
 * @ORM\Table(name="Empoyees")
 */
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")

     */
    private $name;

       /**
     * @ORM\Column(name="experience", type="boolean")
     
     */
    private $experience = false;

    public function getId() : ?int
    {
        return $this->id;
    }
    
    public function getName() : ?string 
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }
    // public function __construct() 
    // {
    // $this->experience = false;
    // }
}



?>