<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Javier De Leon Alvarez <deleonalvarezjavier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pcabreus\WooCommerce\Builder;

/**
 * Class WCProductImageBuilder
 * @package Pcabreus\WooCommerce\Builder
 *
 * @author Javier De Leon Alvarez <deleonalvarezjavier@gmail.com>
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
class WCProductImageBuilder
{
    public $id; // 	integer 	Image ID.
    public $date_created;// 	date-time 	The date the image was created, in the site's timezone. read-only
    public $date_created_gmt;// 	date-time 	The date the image was created, as GMT. read-only
    public $date_modified;// 	date-time 	The date the image was last modified, in the site's timezone. read-only
    public $date_modified_gmt;// 	date-time 	The date the image was last modified, as GMT. read-only
    public $src;//    string    Image URL.
    public $name;//    string    Image name.
    public $alt;//    string    Image alternative text.

    /**
     * @return array
     */
    public function getImage()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return WCProductImageBuilder
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @param mixed $date_created
     * @return WCProductImageBuilder
     */
    public function setDateCreated($date_created)
    {
        $this->date_created = $date_created;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreatedGmt()
    {
        return $this->date_created_gmt;
    }

    /**
     * @param mixed $date_created_gmt
     * @return WCProductImageBuilder
     */
    public function setDateCreatedGmt($date_created_gmt)
    {
        $this->date_created_gmt = $date_created_gmt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }

    /**
     * @param mixed $date_modified
     * @return WCProductImageBuilder
     */
    public function setDateModified($date_modified)
    {
        $this->date_modified = $date_modified;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateModifiedGmt()
    {
        return $this->date_modified_gmt;
    }

    /**
     * @param mixed $date_modified_gmt
     * @return WCProductImageBuilder
     */
    public function setDateModifiedGmt($date_modified_gmt)
    {
        $this->date_modified_gmt = $date_modified_gmt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     * @return WCProductImageBuilder
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
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
     * @return WCProductImageBuilder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @param mixed $alt
     * @return WCProductImageBuilder
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }
}