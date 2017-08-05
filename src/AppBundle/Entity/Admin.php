<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Admin
 */
class Admin implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $musteriid;

    /**
     * @var string
     * @Assert\NotBlank(message="admin.name.not_blank")
     * @Assert\Length(max="35",min="2",maxMessage="admin.name.max_length",minMessage="admin.name.min_length")
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message="admin.username.not_blank")
     * @Assert\Length(max="35",min="4",maxMessage="admin.username.max_length",minMessage="admin.username.min_length")
     */
    private $username;

    /**
     * @var string
     * @Assert\Regex(
     *     pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).{8,20}$/",
     *     match=true,
     *     message="admin.password.needed"
     * )
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $cdate;

    /**
     * @var string
     */
    private $roles;

    /**
     * @var integer
     */
    private $statu = '0';


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
     * Set musteriid
     *
     * @param integer $musteriid
     *
     * @return Admin
     */
    public function setMusteriid($musteriid)
    {
        $this->musteriid = $musteriid;

        return $this;
    }

    /**
     * Get musteriid
     *
     * @return integer
     */
    public function getMusteriid()
    {
        return $this->musteriid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Admin
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set cdate
     *
     * @param \DateTime $cdate
     *
     * @return Admin
     */
    public function setCdate($cdate)
    {
        $this->cdate = $cdate;

        return $this;
    }

    /**
     * Get cdate
     *
     * @return \DateTime
     */
    public function getCdate()
    {
        return $this->cdate;
    }

    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return Admin
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return array($this->roles);
    }

    /**
     * Set statu
     *
     * @param integer $statu
     *
     * @return Admin
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;

        return $this;
    }

    /**
     * Get statu
     *
     * @return integer
     */
    public function getStatu()
    {
        return $this->statu;
    }

    public function serialize()
    {
        return serialize(array($this->id,$this->name,$this->username,$this->roles));
    }

    public function unserialize($serialized)
    {
        list($this->id,$this->name,$this->username,$this->roles)=unserialize($serialized);
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}

