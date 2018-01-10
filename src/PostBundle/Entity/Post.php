<?php

namespace Acme\PostBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Acme\UserBundle\Entity\User;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Acme\PostBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=255)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

//    /**
//     * @Gedmo\Slug(fields={"text"}, updatable=false)
//     * @ORM\Column(name="slug", unique=true)
//     */
//    private $slug;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Acme\UserBundle\Entity\User")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $likes;

    // |
    // |
    // V
    //
    // A Constructor method must be added with ManytoMany associations
    public function __construct()
    {
        $this->likes = new ArrayCollection();
    }

    /**
     *
     * @ORM\ManyToOne(targetEntity="Acme\UserBundle\Entity\User")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $author;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Post
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }


    /**
     * Get likes
     *
     * @return ArrayCollection
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    public function hasLiked(User $author)
    {
        return $this->getLikes()->contains($author);
    }

//    /**
//     * @return mixed
//     */
//    public function getSlug()
//    {
//        return $this->slug;
//    }
//
//    /**
//     * @param mixed $slug
//     */
//    public function setSlug($slug)
//    {
//        $this->slug = $slug;
//    }
}

