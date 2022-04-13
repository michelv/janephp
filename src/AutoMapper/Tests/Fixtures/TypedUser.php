<?php

namespace Jane\AutoMapper\Tests\Fixtures;

class TypedUser
{
    private int $id;

    public string $name;

    /**
     * @var string|int
     */
    public $age;

    private string $email;

    public Address $address;

    /**
     * @var Address[]
     */
    public array $addresses = [];

    public \DateTime $createdAt;

    public float $money;

    public iterable $languages;

    public bool $lovesToDance;

    /**
     * @var mixed[]
     */
    protected array $properties = [];

    public function __construct(int $id, string $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = 'test';
        $this->createdAt = new \DateTime();
        $this->money = 20.10;
        $this->languages = new \ArrayObject();
        $this->lovesToDance = true;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProperties(): iterable
    {
        return $this->properties;
    }

    public function setProperties(iterable $properties): void
    {
        $this->properties = $properties;
    }
}
