<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductCategoriesRepository")
 * @ORM\Table(name="product_categories")
 */
class ProductCategories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

<<<<<<< HEAD
=======
    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="productCategory")
     * @ORM\OrderBy({"dateCreated"="DESC"})
     */
    private $orders;

    /**
     * ProductCategories constructor.
     */
    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }
>>>>>>> 67ce0dc0f8d642fccd9cc2822eb1436cd967fcdc

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return ArrayCollection|Orders[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

}
