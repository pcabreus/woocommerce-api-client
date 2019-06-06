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
class WCProductBuilder
{
    public $id;//	integer 	Unique identifier for the resource. read-only
    public $name;///	string 	Product name.
    public $slug;// 	string 	Product slug.
    public $permalink;// 	string 	Product URL. read-only
    public $date_created;// 	date-time 	The date the product was created, in the site's timezone.read-only
    public $date_created_gmt;// 	date-time 	The date the product was created, as GMT.read-only
    public $date_modified;// 	date-time 	The date the product was last modified, in the site's timezone.read-only
    public $date_modified_gmt;// 	date-time 	The date the product was last modified, as GMT.read-only
    public $type = 'simple';// 	string 	Product type. Options: simple, grouped, external and variable. Default is simple.
    public $status = 'publish';// 	string 	Product status (post status). Options: draft, pending, public and publish. Default is publish.
    public $featured = false;// 	boolean 	Featured product. Default is false.
    public $catalog_visibility = 'visible'; //	string 	Catalog visibility. Options: visible, catalog, search and hidden. Default is visible.
    public $description;// 	string 	Product description.
    public $short_description; //	string 	Product short description.
    public $sku;// 	string 	Unique identifier.
    public $price;// 	string 	Current product price. read-only
    public $regular_price;// 	string 	Product regular price.
    public $sale_price;//	string 	Product sale price.
    public $date_on_sale_from;// 	date-time 	Start date of sale price, in the site's timezone.
    public $date_on_sale_from_gmt;// 	date-time 	Start date of sale price, as GMT.
    public $date_on_sale_to;// 	date-time 	End date of sale price, in the site's timezone.
    public $date_on_sale_to_gmt;// 	date-time 	End date of sale price, as GMT.
    public $price_html;// 	string 	Price formatted in HTML.read-only
    public $on_sale;//	boolean 	Shows if the product is on sale.read-only
    public $purchasable;//	boolean 	Shows if the product can be bought.read-only
    public $total_sales;//	integer 	Amount of sales.read-only
    public $virtual = false;//	boolean 	If the product is virtual. Default is false.
    public $downloadable = false;//	boolean 	If the product is downloadable. Default is false.
    public $downloads;//	array 	List of downloadable files. See Product - Downloads properties
    public $download_limit = -1;//	integer 	Number of times downloadable files can be downloaded after purchase. Default is -1.
    public $download_expiry = -1;//	integer 	Number of days until access to downloadable files expires. Default is -1.
    public $external_url;//	string 	Product external URL. Only for external products.
    public $button_text;//	string 	Product external button text. Only for external products.
    public $tax_status;//	string 	Tax status. Options: taxable, shipping and none. Default is taxable.
    public $tax_class;//	string 	Tax class.
    public $manage_stock = false;//	boolean 	Stock management at product level. Default is false.
    public $stock_quantity;// 	integer 	Stock quantity.
    public $stock_status = 'instock';//	string 	Controls the stock status of the product. Options: instock, outofstock, onbackorder. Default is instock.
    public $backorders = 'no';//	string 	If managing stock, this controls if backorders are allowed. Options: no, notify and yes. Default is no.
    public $backorders_allowed;//	boolean 	Shows if backorders are allowed.read-only
    public $backordered;//	boolean 	Shows if the product is on backordered.read-only
    public $sold_individually = false;// 	boolean 	Allow one item to be bought in a single order. Default is false.
    public $weight;//	string 	Product weight.
    public $dimensions;//	object 	Product dimensions. See Product - Dimensions properties
    public $shipping_required;//	boolean 	Shows if the product need to be shipped.read-only
    public $shipping_taxable;//	boolean 	Shows whether or not the product shipping is taxable.read-only
    public $shipping_class;//	string 	Shipping class slug.
    public $shipping_class_id;// 	integer 	Shipping class ID.read-only
    public $reviews_allowed = true;//	boolean 	Allow reviews. Default is true.
    public $average_rating;//	string 	Reviews average rating.read-only
    public $rating_count;//	integer 	Amount of reviews that the product have.read-only
    public $related_ids;//	array 	List of related products IDs.read-only
    public $upsell_ids;//	array 	List of up-sell products IDs.
    public $cross_sell_ids;//	array 	List of cross-sell products IDs.
    public $parent_id;//	integer 	Product parent ID.
    public $purchase_note;//	string 	Optional note to send the customer after purchase.
    public $categories;//	array 	List of categories. See Product - Categories properties
    public $tags;//	array 	List of tags. See Product - Tags properties
    public $images;//	array 	List of images. See Product - Images properties
    public $attributes;//	array 	List of attributes. See Product - Attributes properties
    public $default_attributes;//	array 	Defaults variation attributes. See Product - Default attributes properties
    public $variations;//	array 	List of variations IDs.read-only
    public $grouped_products;//	array 	List of grouped products ID.
    public $menu_order;//	integer 	Menu order, used to custom sort products.
    public $meta_data;//	array 	Meta data. See Product - Meta data properties

    public function __construct()
    {
        $this->images = array();
        $this->categories = array();
    }

    /**
     * Get the product as array
     * @return array
     */
    public function getProduct(): array
    {
        return get_object_vars($this);
    }

    public function addImagen(WCProductImageBuilder $image)
    {
        $this->images[] = $image->toArray();

        return $this;
    }

    public function addCategory(int $category)
    {
        $this->categories[] = array('id' => $category);

        return $this;
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
     * @return WCProductBuilder
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
     * @return WCProductBuilder
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
     * @return WCProductBuilder
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * @param mixed $permalink
     * @return WCProductBuilder
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

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
     * @return WCProductBuilder
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
     * @return WCProductBuilder
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
     * @return WCProductBuilder
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
     * @return WCProductBuilder
     */
    public function setDateModifiedGmt($date_modified_gmt)
    {
        $this->date_modified_gmt = $date_modified_gmt;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return WCProductBuilder
     */
    public function setType(string $type): WCProductBuilder
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return WCProductBuilder
     */
    public function setTypeSimple(): WCProductBuilder
    {
        $this->type = 'simple';

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return WCProductBuilder
     */
    public function setStatus(string $status): WCProductBuilder
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFeatured(): bool
    {
        return $this->featured;
    }

    /**
     * @param bool $featured
     * @return WCProductBuilder
     */
    public function setFeatured(bool $featured): WCProductBuilder
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * @return string
     */
    public function getCatalogVisibility(): string
    {
        return $this->catalog_visibility;
    }

    /**
     * @param string $catalog_visibility
     * @return WCProductBuilder
     */
    public function setCatalogVisibility(string $catalog_visibility): WCProductBuilder
    {
        $this->catalog_visibility = $catalog_visibility;

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
     * @return WCProductBuilder
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * @param mixed $short_description
     * @return WCProductBuilder
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     * @return WCProductBuilder
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return WCProductBuilder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegularPrice()
    {
        return $this->regular_price;
    }

    /**
     * @param mixed $regular_price
     * @return WCProductBuilder
     */
    public function setRegularPrice($regular_price)
    {
        $this->regular_price = $regular_price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * @param mixed $sale_price
     * @return WCProductBuilder
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOnSaleFrom()
    {
        return $this->date_on_sale_from;
    }

    /**
     * @param mixed $date_on_sale_from
     * @return WCProductBuilder
     */
    public function setDateOnSaleFrom($date_on_sale_from)
    {
        $this->date_on_sale_from = $date_on_sale_from;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOnSaleFromGmt()
    {
        return $this->date_on_sale_from_gmt;
    }

    /**
     * @param mixed $date_on_sale_from_gmt
     * @return WCProductBuilder
     */
    public function setDateOnSaleFromGmt($date_on_sale_from_gmt)
    {
        $this->date_on_sale_from_gmt = $date_on_sale_from_gmt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOnSaleTo()
    {
        return $this->date_on_sale_to;
    }

    /**
     * @param mixed $date_on_sale_to
     * @return WCProductBuilder
     */
    public function setDateOnSaleTo($date_on_sale_to)
    {
        $this->date_on_sale_to = $date_on_sale_to;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOnSaleToGmt()
    {
        return $this->date_on_sale_to_gmt;
    }

    /**
     * @param mixed $date_on_sale_to_gmt
     * @return WCProductBuilder
     */
    public function setDateOnSaleToGmt($date_on_sale_to_gmt)
    {
        $this->date_on_sale_to_gmt = $date_on_sale_to_gmt;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceHtml()
    {
        return $this->price_html;
    }

    /**
     * @param mixed $price_html
     * @return WCProductBuilder
     */
    public function setPriceHtml($price_html)
    {
        $this->price_html = $price_html;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnSale()
    {
        return $this->on_sale;
    }

    /**
     * @param mixed $on_sale
     * @return WCProductBuilder
     */
    public function setOnSale($on_sale)
    {
        $this->on_sale = $on_sale;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchasable()
    {
        return $this->purchasable;
    }

    /**
     * @param mixed $purchasable
     * @return WCProductBuilder
     */
    public function setPurchasable($purchasable)
    {
        $this->purchasable = $purchasable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalSales()
    {
        return $this->total_sales;
    }

    /**
     * @param mixed $total_sales
     * @return WCProductBuilder
     */
    public function setTotalSales($total_sales)
    {
        $this->total_sales = $total_sales;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVirtual(): bool
    {
        return $this->virtual;
    }

    /**
     * @param bool $virtual
     * @return WCProductBuilder
     */
    public function setVirtual(bool $virtual): WCProductBuilder
    {
        $this->virtual = $virtual;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDownloadable(): bool
    {
        return $this->downloadable;
    }

    /**
     * @param bool $downloadable
     * @return WCProductBuilder
     */
    public function setDownloadable(bool $downloadable): WCProductBuilder
    {
        $this->downloadable = $downloadable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * @param mixed $downloads
     * @return WCProductBuilder
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;

        return $this;
    }

    /**
     * @return int
     */
    public function getDownloadLimit(): int
    {
        return $this->download_limit;
    }

    /**
     * @param int $download_limit
     * @return WCProductBuilder
     */
    public function setDownloadLimit(int $download_limit): WCProductBuilder
    {
        $this->download_limit = $download_limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getDownloadExpiry(): int
    {
        return $this->download_expiry;
    }

    /**
     * @param int $download_expiry
     * @return WCProductBuilder
     */
    public function setDownloadExpiry(int $download_expiry): WCProductBuilder
    {
        $this->download_expiry = $download_expiry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExternalUrl()
    {
        return $this->external_url;
    }

    /**
     * @param mixed $external_url
     * @return WCProductBuilder
     */
    public function setExternalUrl($external_url)
    {
        $this->external_url = $external_url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getButtonText()
    {
        return $this->button_text;
    }

    /**
     * @param mixed $button_text
     * @return WCProductBuilder
     */
    public function setButtonText($button_text)
    {
        $this->button_text = $button_text;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxStatus()
    {
        return $this->tax_status;
    }

    /**
     * @param mixed $tax_status
     * @return WCProductBuilder
     */
    public function setTaxStatus($tax_status)
    {
        $this->tax_status = $tax_status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxClass()
    {
        return $this->tax_class;
    }

    /**
     * @param mixed $tax_class
     * @return WCProductBuilder
     */
    public function setTaxClass($tax_class)
    {
        $this->tax_class = $tax_class;

        return $this;
    }

    /**
     * @return bool
     */
    public function isManageStock(): bool
    {
        return $this->manage_stock;
    }

    /**
     * @param bool $manage_stock
     * @return WCProductBuilder
     */
    public function setManageStock(bool $manage_stock): WCProductBuilder
    {
        $this->manage_stock = $manage_stock;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStockQuantity()
    {
        return $this->stock_quantity;
    }

    /**
     * @param mixed $stock_quantity
     * @return WCProductBuilder
     */
    public function setStockQuantity($stock_quantity)
    {
        $this->stock_quantity = $stock_quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getStockStatus(): string
    {
        return $this->stock_status;
    }

    /**
     * @param string $stock_status
     * @return WCProductBuilder
     */
    public function setStockStatus(string $stock_status): WCProductBuilder
    {
        $this->stock_status = $stock_status;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackorders(): string
    {
        return $this->backorders;
    }

    /**
     * @param string $backorders
     * @return WCProductBuilder
     */
    public function setBackorders(string $backorders): WCProductBuilder
    {
        $this->backorders = $backorders;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackordersAllowed()
    {
        return $this->backorders_allowed;
    }

    /**
     * @param mixed $backorders_allowed
     * @return WCProductBuilder
     */
    public function setBackordersAllowed($backorders_allowed)
    {
        $this->backorders_allowed = $backorders_allowed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackordered()
    {
        return $this->backordered;
    }

    /**
     * @param mixed $backordered
     * @return WCProductBuilder
     */
    public function setBackordered($backordered)
    {
        $this->backordered = $backordered;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSoldIndividually(): bool
    {
        return $this->sold_individually;
    }

    /**
     * @param bool $sold_individually
     * @return WCProductBuilder
     */
    public function setSoldIndividually(bool $sold_individually): WCProductBuilder
    {
        $this->sold_individually = $sold_individually;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     * @return WCProductBuilder
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param mixed $dimensions
     * @return WCProductBuilder
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingRequired()
    {
        return $this->shipping_required;
    }

    /**
     * @param mixed $shipping_required
     * @return WCProductBuilder
     */
    public function setShippingRequired($shipping_required)
    {
        $this->shipping_required = $shipping_required;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingTaxable()
    {
        return $this->shipping_taxable;
    }

    /**
     * @param mixed $shipping_taxable
     * @return WCProductBuilder
     */
    public function setShippingTaxable($shipping_taxable)
    {
        $this->shipping_taxable = $shipping_taxable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingClass()
    {
        return $this->shipping_class;
    }

    /**
     * @param mixed $shipping_class
     * @return WCProductBuilder
     */
    public function setShippingClass($shipping_class)
    {
        $this->shipping_class = $shipping_class;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingClassId()
    {
        return $this->shipping_class_id;
    }

    /**
     * @param mixed $shipping_class_id
     * @return WCProductBuilder
     */
    public function setShippingClassId($shipping_class_id)
    {
        $this->shipping_class_id = $shipping_class_id;

        return $this;
    }

    /**
     * @return bool
     */
    public function isReviewsAllowed(): bool
    {
        return $this->reviews_allowed;
    }

    /**
     * @param bool $reviews_allowed
     * @return WCProductBuilder
     */
    public function setReviewsAllowed(bool $reviews_allowed): WCProductBuilder
    {
        $this->reviews_allowed = $reviews_allowed;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAverageRating()
    {
        return $this->average_rating;
    }

    /**
     * @param mixed $average_rating
     * @return WCProductBuilder
     */
    public function setAverageRating($average_rating)
    {
        $this->average_rating = $average_rating;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatingCount()
    {
        return $this->rating_count;
    }

    /**
     * @param mixed $rating_count
     * @return WCProductBuilder
     */
    public function setRatingCount($rating_count)
    {
        $this->rating_count = $rating_count;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelatedIds()
    {
        return $this->related_ids;
    }

    /**
     * @param mixed $related_ids
     * @return WCProductBuilder
     */
    public function setRelatedIds($related_ids)
    {
        $this->related_ids = $related_ids;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpsellIds()
    {
        return $this->upsell_ids;
    }

    /**
     * @param mixed $upsell_ids
     * @return WCProductBuilder
     */
    public function setUpsellIds($upsell_ids)
    {
        $this->upsell_ids = $upsell_ids;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCrossSellIds()
    {
        return $this->cross_sell_ids;
    }

    /**
     * @param mixed $cross_sell_ids
     * @return WCProductBuilder
     */
    public function setCrossSellIds($cross_sell_ids)
    {
        $this->cross_sell_ids = $cross_sell_ids;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent_id
     * @return WCProductBuilder
     */
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseNote()
    {
        return $this->purchase_note;
    }

    /**
     * @param mixed $purchase_note
     * @return WCProductBuilder
     */
    public function setPurchaseNote($purchase_note)
    {
        $this->purchase_note = $purchase_note;

        return $this;
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param array $categories
     * @return WCProductBuilder
     */
    public function setCategories(array $categories): WCProductBuilder
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     * @return WCProductBuilder
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     * @return WCProductBuilder
     */
    public function setImages(array $images): WCProductBuilder
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     * @return WCProductBuilder
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultAttributes()
    {
        return $this->default_attributes;
    }

    /**
     * @param mixed $default_attributes
     * @return WCProductBuilder
     */
    public function setDefaultAttributes($default_attributes)
    {
        $this->default_attributes = $default_attributes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param mixed $variations
     * @return WCProductBuilder
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupedProducts()
    {
        return $this->grouped_products;
    }

    /**
     * @param mixed $grouped_products
     * @return WCProductBuilder
     */
    public function setGroupedProducts($grouped_products)
    {
        $this->grouped_products = $grouped_products;

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
     * @return WCProductBuilder
     */
    public function setMenuOrder($menu_order)
    {
        $this->menu_order = $menu_order;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetaData()
    {
        return $this->meta_data;
    }

    /**
     * @param mixed $meta_data
     * @return WCProductBuilder
     */
    public function setMetaData($meta_data)
    {
        $this->meta_data = $meta_data;

        return $this;
    }

}