<?php

trait Address
{
    protected $state;
    protected $city;
    protected $street;
    protected $postal_code;

    public function setAddress($state, $city, $street, $postal_code)
    {
        $this->setState($state);
        $this->setCity($city);
        $this->setStreet($street);
        $this->setPostalCode($postal_code);
    }

    public function getAddress()
    {
        return "$this->state - $this->city - $this->street - $this->postal_code";
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postal_code
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set the value of postal_code
     *
     * @return  self
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }
}
