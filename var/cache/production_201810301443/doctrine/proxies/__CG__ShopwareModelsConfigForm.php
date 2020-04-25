<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Config;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Form extends \Shopware\Models\Config\Form implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'plugin', 'translations', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'parentId', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'parent', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'label', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'description', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'pluginId', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'position', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'elements', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'children'];
        }

        return ['__isInitialized__', 'plugin', 'translations', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'parentId', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'parent', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'label', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'description', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'pluginId', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'position', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'elements', '' . "\0" . 'Shopware\\Models\\Config\\Form' . "\0" . 'children'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Form $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getElement($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElement', [$name]);

        return parent::getElement($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setElement($type, $name, $options = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setElement', [$type, $name, $options]);

        return parent::setElement($type, $name, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function removeElement($element)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeElement', [$element]);

        return parent::removeElement($element);
    }

    /**
     * {@inheritDoc}
     */
    public function addElement($element, $name = NULL, $options = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addElement', [$element, $name, $options]);

        return parent::addElement($element, $name, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getElements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getElements', []);

        return parent::getElements();
    }

    /**
     * {@inheritDoc}
     */
    public function hasElements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasElements', []);

        return parent::hasElements();
    }

    /**
     * {@inheritDoc}
     */
    public function setPluginId($pluginId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPluginId', [$pluginId]);

        return parent::setPluginId($pluginId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPluginId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPluginId', []);

        return parent::getPluginId();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren($children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslations', []);

        return parent::hasTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray(array $array = array (
), array $fillable = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fromArray', [$array, $fillable]);

        return parent::fromArray($array, $fillable);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToOne($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToOne', [$data, $model, $property, $reference]);

        return parent::setOneToOne($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToMany($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToMany', [$data, $model, $property, $reference]);

        return parent::setOneToMany($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setManyToOne($data, $model, $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManyToOne', [$data, $model, $property]);

        return parent::setManyToOne($data, $model, $property);
    }

}
