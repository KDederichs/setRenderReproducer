<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Test
 * @package App\Entity
 * @ORM\Entity
 */
class TestEntity
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $testFieldOne = 'Test 1';

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $testFieldTwo = 'Test 2';

    /**
     * @return string
     */
    public function getTestFieldOne(): string
    {
        return $this->testFieldOne;
    }

    /**
     * @param string $testFieldOne
     */
    public function setTestFieldOne(string $testFieldOne): void
    {
        $this->testFieldOne = $testFieldOne;
    }

    /**
     * @return string
     */
    public function getTestFieldTwo(): string
    {
        return $this->testFieldTwo;
    }

    /**
     * @param string $testFieldTwo
     */
    public function setTestFieldTwo(string $testFieldTwo): void
    {
        $this->testFieldTwo = $testFieldTwo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
