<?php

namespace prueba\homeBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idModelo;

    /**
     * @var string
     */
    private $idCaracteristicas;

    /**
     * @var integer
     */
    private $idFabricante;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set idModelo
     *
     * @param integer $idModelo
     *
     * @return Producto
     */
    public function setIdModelo($idModelo)
    {
        $this->idModelo = $idModelo;

        return $this;
    }

    /**
     * Get idModelo
     *
     * @return integer
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }

    /**
     * Set idCaracteristicas
     *
     * @param string $idCaracteristicas
     *
     * @return Producto
     */
    public function setIdCaracteristicas($idCaracteristicas)
    {
        $this->idCaracteristicas = $idCaracteristicas;

        return $this;
    }

    /**
     * Get idCaracteristicas
     *
     * @return string
     */
    public function getIdCaracteristicas()
    {
        return $this->idCaracteristicas;
    }

    /**
     * Set idFabricante
     *
     * @param integer $idFabricante
     *
     * @return Producto
     */
    public function setIdFabricante($idFabricante)
    {
        $this->idFabricante = $idFabricante;

        return $this;
    }

    /**
     * Get idFabricante
     *
     * @return integer
     */
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }
}

