<?php
namespace Rede;

class Item implements RedeSerializable
{
    use SerializeTrait;

    const PHYSICAL = 1;
    const DIGITAL = 2;
    const SERVICE = 3;
    const AIRLINE = 4;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $discount;

    /**
     * @var int
     */
    private $freight;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $shippingType;

    /**
     * @var int
     */
    private $type;

    /**
     * Item constructor.
     *
     * @param $id
     * @param $quantity
     * @param int $type
     */
    public function __construct($id, $quantity, $type = Item::PHYSICAL)
    {
        $this->setId($id);
        $this->setQuantity($quantity);
        $this->setType($type);
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return int
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $amount
     *
     * @return Item
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int $discount
     *
     * @return Item
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param int $freight
     *
     * @return Item
     */
    public function setFreight($freight)
    {
        $this->freight = $freight;
        return $this;
    }

    /**
     * @param string $id
     *
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $quantity
     *
     * @return Item
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string $shippingType
     *
     * @return Item
     */
    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
        return $this;
    }

    /**
     * @param int $type
     *
     * @return Item
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}