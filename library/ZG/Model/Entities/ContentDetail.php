<?php

/**
 *
 * ZEND GROUP
 *
 * @name        ContentDetail.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * ContentDetail
 *
 * @ORM\Table(name="content_detail")
 * @ORM\Entity
 */
class ContentDetail
{
    /**
     * @var integer $contentDetailId
     *
     * @ORM\Column(name="content_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentDetailId;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=125, nullable=true)
     */
    private $title;

    /**
     * @var string $alias
     *
     * @ORM\Column(name="alias", type="string", length=125, nullable=true)
     */
    private $alias;

    /**
     * @var string $summary
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @var text $fullContent
     *
     * @ORM\Column(name="full_content", type="text", nullable=true)
     */
    private $fullContent;

    /**
     * @var string $metaTitle
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @var string $metaKeyword
     *
     * @ORM\Column(name="meta_keyword", type="string", length=255, nullable=true)
     */
    private $metaKeyword;

    /**
     * @var string $metaDescription
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=true)
     */
    private $metaDescription;

    /**
     * @var Locale
     *
     * @ORM\ManyToOne(targetEntity="Locale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;

    /**
     * @var Content
     *
     * @ORM\ManyToOne(targetEntity="Content")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_id", referencedColumnName="content_id")
     * })
     */
    private $content;


    /**
     * Get contentDetailId
     *
     * @return integer 
     */
    public function getContentDetailId()
    {
        return $this->contentDetailId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ContentDetail
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return ContentDetail
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return ContentDetail
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set fullContent
     *
     * @param text $fullContent
     * @return ContentDetail
     */
    public function setFullContent($fullContent)
    {
        $this->fullContent = $fullContent;
        return $this;
    }

    /**
     * Get fullContent
     *
     * @return text 
     */
    public function getFullContent()
    {
        return $this->fullContent;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return ContentDetail
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaKeyword
     *
     * @param string $metaKeyword
     * @return ContentDetail
     */
    public function setMetaKeyword($metaKeyword)
    {
        $this->metaKeyword = $metaKeyword;
        return $this;
    }

    /**
     * Get metaKeyword
     *
     * @return string 
     */
    public function getMetaKeyword()
    {
        return $this->metaKeyword;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return ContentDetail
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set locale
     *
     * @param Locale $locale
     * @return ContentDetail
     */
    public function setLocale(\Locale $locale = null)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return Locale 
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return ContentDetail
     */
    public function setContent(\Content $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return Content 
     */
    public function getContent()
    {
        return $this->content;
    }
}