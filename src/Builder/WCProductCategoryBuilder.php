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
 * Class WCProductCategory
 * @package Pcabreus\WooCommerce\Builder
 *
 * @author Javier De Leon Alvarez <deleonalvarezjavier@gmail.com>
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
class WCProductCategoryBuilder
{
    public $id;// 	integer 	Unique identifier for the resource. read-only
    public $name; // 	string 	Category name. mandatory
    public $slug;// 	string 	An alphanumeric identifier for the resource unique to its type.
    public $parent;//	integer 	The ID for the parent of the resource.
    public $description;//	string 	HTML description of the resource.
    public $display;//	string 	Category archive display type. Options: default, products, subcategories and both. Default is default.
    public $image;//	object 	Image data. See Product category - Image properties
    public $menu_order;//	integer 	Menu order, used to custom sort the resource.
    public $count;// 	integer 	Number of published products for the resource.

    /**
     * Get the category
     *
     * @return array
     */
    public function getCategory(): array
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
     * @return WCProductCategoryBuilder
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return WCProductCategoryBuilder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return WCProductCategoryBuilder
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     * @return WCProductCategoryBuilder
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return WCProductCategoryBuilder
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param mixed $display
     * @return WCProductCategoryBuilder
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     * @return WCProductCategoryBuilder
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuOrder()
    {
        return $this->menu_order;
    }

    /**
     * @param mixed $menu_order
     * @return WCProductCategoryBuilder
     */
    public function setMenuOrder($menu_order)
    {
        $this->menu_order = $menu_order;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     * @return WCProductCategoryBuilder
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}