<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *          collectionOperations={
 *                "post"={"path"="/tests", "status"=301}
 *          },
 *          itemOperations={
 *                "get",
 *          },
 *          formats={"json", "xml"={"text/xml"}},
 *		attributes={"pagination_enabled"=false},
 * )
 *
 *
 * )
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $studentNR;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudentNR(): ?int
    {
        return $this->studentNR;
    }

    public function getImage()
    {
    	return '<img style="width: 200px" src="https://media.giphy.com/media/XreQmk7ETCak0/giphy.gif">';

    }

    public function setStudentNR(int $studentNR): self
    {
        $this->studentNR = $studentNR;

        return $this;
    }
}
