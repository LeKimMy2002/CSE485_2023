<?php
    declare(strict_types = 1);
    class Student{
        private string $id;
        private string $name;
        private string $class;
        private string $address;

    
    public function __construct(string $id, string $name, string $class, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->address = $address;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass(string $class)
    {
        $this->class = $class;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress(string $address)
    {
        $this->address = $address;
    }
}
?>