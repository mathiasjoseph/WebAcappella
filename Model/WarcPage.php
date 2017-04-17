<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/02/17
 * Time: 07:08
 */

namespace Miky\Component\WebAcappella\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;

class WarcPage implements CommonModelInterface
{

    Use CommonModelTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var WarcElement[]
     */
    protected $elements;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var WarcWebsite
     */
    protected $website;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return WarcElement[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param WarcElement[] $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return WarcWebsite
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param WarcWebsite $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

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


}