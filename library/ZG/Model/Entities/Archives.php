<?php

/**
 *
 * ZEND GROUP
 *
 * @name        Archives.php
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
 * Archives
 *
 * @ORM\Table(name="archives")
 * @ORM\Entity
 */
class Archives
{
    /**
     * @var integer $archiveId
     *
     * @ORM\Column(name="archive_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $archiveId;

    /**
     * @var integer $archiveDate
     *
     * @ORM\Column(name="archive_date", type="integer", nullable=true)
     */
    private $archiveDate;

    /**
     * @var boolean $archiveDownloadable
     *
     * @ORM\Column(name="archive_downloadable", type="boolean", nullable=true)
     */
    private $archiveDownloadable;

    /**
     * @var boolean $archiveVieweable
     *
     * @ORM\Column(name="archive_vieweable", type="boolean", nullable=true)
     */
    private $archiveVieweable;

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
     * Get archiveId
     *
     * @return integer 
     */
    public function getArchiveId()
    {
        return $this->archiveId;
    }

    /**
     * Set archiveDate
     *
     * @param integer $archiveDate
     * @return Archives
     */
    public function setArchiveDate($archiveDate)
    {
        $this->archiveDate = $archiveDate;
        return $this;
    }

    /**
     * Get archiveDate
     *
     * @return integer 
     */
    public function getArchiveDate()
    {
        return $this->archiveDate;
    }

    /**
     * Set archiveDownloadable
     *
     * @param boolean $archiveDownloadable
     * @return Archives
     */
    public function setArchiveDownloadable($archiveDownloadable)
    {
        $this->archiveDownloadable = $archiveDownloadable;
        return $this;
    }

    /**
     * Get archiveDownloadable
     *
     * @return boolean 
     */
    public function getArchiveDownloadable()
    {
        return $this->archiveDownloadable;
    }

    /**
     * Set archiveVieweable
     *
     * @param boolean $archiveVieweable
     * @return Archives
     */
    public function setArchiveVieweable($archiveVieweable)
    {
        $this->archiveVieweable = $archiveVieweable;
        return $this;
    }

    /**
     * Get archiveVieweable
     *
     * @return boolean 
     */
    public function getArchiveVieweable()
    {
        return $this->archiveVieweable;
    }

    /**
     * Set content
     *
     * @param Content $content
     * @return Archives
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