<?php

class Computer
{
    // variables : caractériques de la classe
    // -> propriétes, attributs ou champs

    /**
     * @var string The computer brand
     */
    protected $brand;
    /**
     * @var string The computer model
     */
    protected $model;

    /**
     * Computer constructor.
     * @param string $brand
     * @param string $model
     */
    public function __construct(string $brand = 'Lenovo', string $model = 'ThinkPad')
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function start()
    {
        echo "Starting $this->model";
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Computer
     */
    public function setBrand(string $brand): Computer
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return Computer
     */
    public function setModel(string $model): Computer
    {
        $this->model = $model;
        return $this;
    }


}
