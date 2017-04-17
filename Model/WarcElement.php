<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 10/11/16
 * Time: 10:52
 */

namespace Miky\Component\WebAcappella\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;

class WarcElement implements WarcElementInterface, CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $cssClass;

    /**
     * @var string
     */
    protected $cssId;

    /**
     * @var WarcPage
     */
    protected $page;

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @param string $cssClass
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;
    }

    /**
     * @return string
     */
    public function getCssId()
    {
        return $this->cssId;
    }

    /**
     * @param string $cssId
     */
    public function setCssId($cssId)
    {
        $this->cssId = $cssId;
    }

    /**
     * @return WarcPage
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param WarcPage $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }
}