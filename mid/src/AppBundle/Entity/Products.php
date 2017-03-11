<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var string
     *
     * @ORM\Column(name="names", type="string", length=200, nullable=false)
     */
    private $names;

    /**
     * @var string
     *
     * @ORM\Column(name="prices", type="string", length=200, nullable=false)
     */
    private $prices;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Set names
     *
     * @param string $names
     *
     * @return Products
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Get names
     *
     * @return string
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Set prices
     *
     * @param string $prices
     *
     * @return Products
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * Get prices
     *
     * @return string
     */
    public function getPrices()
    {
        return $this->prices;
    }

}
