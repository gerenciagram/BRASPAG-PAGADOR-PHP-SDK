<?php
namespace BraspagPagador\API;

class Merchant
{
    private $id;
    private $key;
    
    public function __construct($id, $key)
    {
        $this->id = $id;
        $this->key = $key;
    }
    
    /**
     * Gets the merchant identification number
     *
     * @return the merchant identification number on Braspag
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Gets the merchant identification key
     *
     * @return the merchant identification key on Braspag
     */
    public function getKey()
    {
        return $this->key;
    }
}