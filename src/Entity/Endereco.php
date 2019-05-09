<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $quadra;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $observacao;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuadra(): ?string
    {
        return $this->quadra;
    }

    public function setQuadra(string $quadra): self
    {
        $this->quadra = $quadra;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    public function setObservacao(string $observacao): self
    {
        $this->observacao = $observacao;

        return $this;
    }
}
