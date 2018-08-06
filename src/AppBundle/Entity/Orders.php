<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 * @ORM\Table(name="orders")
 */
class Orders
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
  private $productName;

  /**
   * @ORM\Column(type="float")
   */
  private $productBuy;

  /**
   * @ORM\Column(type="float")
   */
  private $productSale;

  /**
   * @ORM\Column(type="datetime")
   */
  private $dateCreated;

  /**
   * @ORM\Column(type="datetime")
   */
  private $dateDelivery;

  /**
   * @ORM\ManyToOne(targetEntity="ProductCategories", inversedBy="orders")
   * @ORM\JoinColumn(nullable=false)
   */
  private $productCategory;

  /**
   * @ORM\ManyToOne(targetEntity="Customers", inversedBy="orders")
   * @ORM\JoinColumn(nullable=false)
   */
  private $customers;

  /**
   * @return mixed
   */
  public function getCustomers()
  {
    return $this->customers;
  }

  /**
   * @param mixed $customer
   */
  public function setCustomers(Customers $customers)
  {
    $this->customers = $customers;
  }

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
  public function getProductCategory()
  {
    return $this->productCategory;
  }

  /**
   * @return mixed
   */
  public function getProductName()
  {
    return $this->productName;
  }

  /**
   * @param mixed $productName
   */
  public function setProductName($productName)
  {
    $this->productName = $productName;
  }

  /**
   * @return mixed
   */
  public function getProductBuy()
  {
    return $this->productBuy;
  }

  /**
   * @param mixed $productBuy
   */
  public function setProductBuy($productBuy)
  {
    $this->productBuy = $productBuy;
  }

  /**
   * @return mixed
   */
  public function getProductSale()
  {
    return $this->productSale;
  }

  /**
   * @param mixed $productSale
   */
  public function setProductSale($productSale)
  {
    $this->productSale = $productSale;
  }

  /**
   * @return mixed
   */
  public function getCustomerName()
  {
    return $this->customerName;
  }

  /**
   * @param mixed $customerName
   */
  public function setCustomerName($customerName)
  {
    $this->customerName = $customerName;
  }

  /**
   * @return mixed
   */
  public function getCustomerAdress()
  {
    return $this->customerAdress;
  }

  /**
   * @param mixed $customerAdress
   */
  public function setCustomerAdress($customerAdress)
  {
    $this->customerAdress = $customerAdress;
  }

  /**
   * @return mixed
   */
  public function getCustomerPhone()
  {
    return $this->customerPhone;
  }

  /**
   * @param mixed $customerPhone
   */
  public function setCustomerPhone($customerPhone)
  {
    $this->customerPhone = $customerPhone;
  }

  /**
   * @return mixed
   */
  public function getDateCreated()
  {
    return $this->dateCreated;
  }

  /**
   * @param mixed $dateCreated
   */
  public function setDateCreated($dateCreated)
  {
    $this->dateCreated = $dateCreated;
  }

  /**
   * @return mixed
   */
  public function getDateDelivery()
  {
    return $this->dateDelivery;
  }

  /**
   * @param mixed $dateDelivery
   */
  public function setDateDelivery($dateDelivery)
  {
    $this->dateDelivery = $dateDelivery;
  }

  /**
   * @param mixed $productCategory
   */
  public function setProductCategory(ProductCategories $productCategory)
  {
    $this->productCategory = $productCategory;
  }

}
