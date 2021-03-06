<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message ="Ce champ ne peut pas rester vide")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message ="Ce champ ne peut pas rester vide")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true) 
     * @Assert\NotBlank(message ="Ce champ ne peut pas rester vide")
     * @Assert\Email(
     * message ="l'email '{{value}}'n'est pas un email valide", checkMX = true
     * )
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }
    
/**
 * Returns the roles granted to the user.
 *
 *     public function getRoles()
 *     {
 *         return ['ROLE_USER'];
 *     }
 *
 * Alternatively, the roles might be stored on a ``roles`` property,
 * and populated in any number of different ways when the user object
 * is created.
 * @return array (Role|string)[] The user roles
 */
public function getRoles()
{
    return ['ROLE_ADMIN'];
}

/**
 * Returns the salt that was originally used to encode the password.
 *
 * This can return null if the password was not encoded using a salt.
 *
 * @return string|null The salt
 */
public function getSalt()
{
    return null;
}

/**
 * Removes sensitive data from the user.
 *
 * This is important if, at any given point, sensitive information like
 * the plain-text password is stored on this object.
 */
public function eraseCredentials()
{
}

/**
 * String representation of object
 * @link https://php.net/manual/en/serializable.serialize.php
 * @return string the string representation of the object or null
 * @since 5.1.0
 */
public function serialize()
{
    return serialize([
        $this->id,
        $this->username,
        $this->password
    ]);
}

/**
 * Constructs the object
 * @link https://php.net/manual/en/serializable.unserialize.php
 * @param string $serialized <p>
 * The string representation of the object.
 * </p>
 * @return void
 * @since 5.1.0
 */
public function unserialize($serialized)
{
    list(
        $this->id,
        $this->username,
        $this->password
        ) = unserialize($serialized, ['allowed_classes' => false]);
}
public function __toString()
{
    return (string)$this->getUsername();
}

    
}
