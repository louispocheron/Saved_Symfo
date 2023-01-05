<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Action extends \App\Entity\Action implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'villeDepart', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'villeArrive', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'km', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'raisons', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heureDepart', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heureArrivee', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'association', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'frais', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'fraisKilometrique', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'charges', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'groupe', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'dons', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heuresValorisees', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'aPayer', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'bareme'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'villeDepart', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'villeArrive', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'km', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'raisons', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heureDepart', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heureArrivee', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'association', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'duree', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'frais', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'fraisKilometrique', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'charges', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'groupe', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'dons', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'heuresValorisees', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'aPayer', '' . "\0" . 'App\\Entity\\Action' . "\0" . 'bareme'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Action $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getVilleDepart(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVilleDepart', []);

        return parent::getVilleDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setVilleDepart(string $villeDepart): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVilleDepart', [$villeDepart]);

        return parent::setVilleDepart($villeDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getVilleArrive(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVilleArrive', []);

        return parent::getVilleArrive();
    }

    /**
     * {@inheritDoc}
     */
    public function setVilleArrive(string $villeArrive): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVilleArrive', [$villeArrive]);

        return parent::setVilleArrive($villeArrive);
    }

    /**
     * {@inheritDoc}
     */
    public function getKm(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKm', []);

        return parent::getKm();
    }

    /**
     * {@inheritDoc}
     */
    public function setKm(int $km): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKm', [$km]);

        return parent::setKm($km);
    }

    /**
     * {@inheritDoc}
     */
    public function getRaisons(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRaisons', []);

        return parent::getRaisons();
    }

    /**
     * {@inheritDoc}
     */
    public function setRaisons(string $raisons): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRaisons', [$raisons]);

        return parent::setRaisons($raisons);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureDepart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureDepart', []);

        return parent::getHeureDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureDepart(?\DateTimeInterface $heureDepart): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureDepart', [$heureDepart]);

        return parent::setHeureDepart($heureDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureArrivee(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureArrivee', []);

        return parent::getHeureArrivee();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureArrivee(?\DateTimeInterface $heureArrivee): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureArrivee', [$heureArrivee]);

        return parent::setHeureArrivee($heureArrivee);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\user
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId(?\App\Entity\user $users): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', [$users]);

        return parent::setUserId($users);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociation(): ?\App\Entity\associations
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociation', []);

        return parent::getAssociation();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssociation(?\App\Entity\associations $association): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssociation', [$association]);

        return parent::setAssociation($association);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', []);

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree(string $duree): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', [$duree]);

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrais(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrais', []);

        return parent::getFrais();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrais(?int $frais): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrais', [$frais]);

        return parent::setFrais($frais);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getFraisKilometrique(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFraisKilometrique', []);

        return parent::getFraisKilometrique();
    }

    /**
     * {@inheritDoc}
     */
    public function setFraisKilometrique(?string $fraisKilometrique): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFraisKilometrique', [$fraisKilometrique]);

        return parent::setFraisKilometrique($fraisKilometrique);
    }

    /**
     * {@inheritDoc}
     */
    public function getCharges(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharges', []);

        return parent::getCharges();
    }

    /**
     * {@inheritDoc}
     */
    public function setCharges(string $charges): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCharges', [$charges]);

        return parent::setCharges($charges);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupe', []);

        return parent::getGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupe(string $groupe): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupe', [$groupe]);

        return parent::setGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getDons(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDons', []);

        return parent::getDons();
    }

    /**
     * {@inheritDoc}
     */
    public function setDons(?string $dons): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDons', [$dons]);

        return parent::setDons($dons);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeuresValorisees(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeuresValorisees', []);

        return parent::getHeuresValorisees();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeuresValorisees(?string $heuresValorisees): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeuresValorisees', [$heuresValorisees]);

        return parent::setHeuresValorisees($heuresValorisees);
    }

    /**
     * {@inheritDoc}
     */
    public function getAPayer(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAPayer', []);

        return parent::getAPayer();
    }

    /**
     * {@inheritDoc}
     */
    public function setAPayer(?string $aPayer): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAPayer', [$aPayer]);

        return parent::setAPayer($aPayer);
    }

    /**
     * {@inheritDoc}
     */
    public function getBareme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBareme', []);

        return parent::getBareme();
    }

    /**
     * {@inheritDoc}
     */
    public function setBareme($bareme): \App\Entity\Action
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBareme', [$bareme]);

        return parent::setBareme($bareme);
    }

}