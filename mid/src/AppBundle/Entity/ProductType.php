<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductType
 *
 * @ORM\Table(name="product_type", indexes={@ORM\Index(name="FK_product", columns={"prouduct_id"}), @ORM\Index(name="FK_types", columns={"type_id"})})
 * @ORM\Entity
 */
class ProductType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prouduct_id", referencedColumnName="id")
     * })
     */
    private $prouduct;

    /**
     * @var \AppBundle\Entity\Types
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prouduct
     *
     * @param \AppBundle\Entity\Products $prouduct
     *
     * @return ProductType
     */
    public function setProuduct(\AppBundle\Entity\Products $prouduct = null)
    {
        $this->prouduct = $prouduct;

        return $this;
    }

    /**
     * Get prouduct
     *
     * @return \AppBundle\Entity\Products
     */
    public function getProuduct()
    {
        return $this->prouduct;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Types $type
     *
     * @return ProductType
     */
    public function setType(\AppBundle\Entity\Types $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Types
     */
    public function getType()
    {
        return $this->type;
    }
}
