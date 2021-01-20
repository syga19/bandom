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
     * @ORM\Column(type="string")

     */
    private $experience;

    public function getId()
    {
        return $this->id;
    }
   
    
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setexperience($experience)
    {
        $this->experience = $experience;
    }
}



?>