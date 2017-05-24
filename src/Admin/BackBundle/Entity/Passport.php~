<?php

namespace Admin\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passport
 *
 * @ORM\Table(name="passport")
 * @ORM\Entity(repositoryClass="Admin\BackBundle\Repository\PassportRepository")
 */
class Passport
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
 
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $username;
 
    /**
     * @ORM\Column(type="string")
     */
    private $password;
 
    /**
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @ORM\Column(type="string")
     */
    private $last_login_ip;

    /**
     * @ORM\Column(type="integer")
     */
    private $last_login_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $createtime;

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
     * Set username
     *
     * @param string $username
     *
     * @return Passport
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
     * @return Passport
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
     * Set type
     *
     * @param integer $type
     *
     * @return Passport
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lastLoginIp
     *
     * @param string $lastLoginIp
     *
     * @return Passport
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->last_login_ip = $lastLoginIp;

        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->last_login_ip;
    }

    /**
     * Set lastLoginTime
     *
     * @param integer $lastLoginTime
     *
     * @return Passport
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->last_login_time = $lastLoginTime;

        return $this;
    }

    /**
     * Get lastLoginTime
     *
     * @return integer
     */
    public function getLastLoginTime()
    {
        return $this->last_login_time;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return Passport
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }
}
