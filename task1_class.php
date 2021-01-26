<?php

abstract class Person //Создаем абстрактный класс
{
	protected $name;
	protected $age;
	protected $sex;

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function getSex()
	{
		return $this->sex;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setSex($sex)
	{
		$this->sex = $sex;
	}
};

class Father extends Person
{
	protected $wifeName;

	public function getWifeName()
	{
		return $this->wifeName;
	}

	public function setWifeName($name)
	{
		$this->wifeName = $name;
	}
};

class Mother extends Person
{
	protected $husbandName;

	public function getHusbandName()
	{
		return $this->husbandName;
	}

	public function setHusbandName($name)
	{
		$this->husbandName = $name;
	}
};

class Child extends Person
{
	protected $toysCount;
	protected $mother;
	protected $father;

	public function getToysCount()
	{
		return $this->toysCount;
	}

	public function setToysCount($count)
	{
		$this->toysCount = $count;
	}

	// композиция для использования свойств и методов родителей
	public function __construct()
	{
		$this->mother = new Mother;  // создаем объект класса Mother
		$this->father = new Father;  // создаем объект класса Father
	}

	public function getMotherName()
	{
		return $this->mother->getName();  // используем объект класса Mother
	}

	public function getFatherName()
	{
		return $this->father->getName();  // используем объект класса Father
	}

	public function setMotherName($name)
	{
		$this->mother->setName($name);
	}

	public function setFatherName($name)
	{
		$this->father->setName($name);
	}

	public function getMotherAge()
	{
		return $this->mother->getAge();
	}

	public function getFatherAge()
	{
		return $this->father->getAge();
	}

	public function setMotherAge($age)
	{
		$this->mother->setAge($age);
	}

	public function setFatherAge($age)
	{
		$this->father->setAge($age);
	}
};

class Family
{
	protected $familyMemberCount;

	public function getfamilyMemberCount()
	{
		return $this->familyMemberCount;
	}

	public function setfamilyMemberCount($count)
	{
		$this->familyMemberCount = $count;
	}

	// композиция для использования свойств и методов класса Child, в котором уже содержатся свойства и методы родителей
	public function __construct()
	{
		$this->child = new Child;
	}

	public function getChildName()
	{
		return $this->child->getName();
	}

	public function setChildName($name)
	{
		$this->child->setName($name);
	}

	public function getChildAge()
	{
		return $this->child->getAge();
	}

	public function setChildAge($age)
	{
		$this->child->setAge($age);
	}

	public function getChildSex()
	{
		return $this->child->getSex();
	}

	public function setChildSex($sex)
	{
		$this->child->setSex($sex);
	}

	public function getMotherName()
	{
		return $this->child->getMotherName();
	}

	public function getFatherName()
	{
		return $this->child->getFatherName();
	}

	public function setMotherName($name)
	{
		$this->child->setMotherName($name);
	}

	public function setFatherName($name)
	{
		$this->child->setFatherName($name);
	}

	public function getMotherAge()
	{
		return $this->child->getMotherAge();
	}

	public function getFatherAge()
	{
		return $this->child->getFatherAge();
	}

	public function setMotherAge($age)
	{
		$this->child->setMotherAge($age);
	}

	public function setFatherAge($age)
	{
		$this->child->setFatherAge($age);
	}
};

/*Проверка*/

$objectFather = new Father();
$objectMother = new Mother();
$objectChild = new Child();
$objectFamily = new Family();

$objectFather->setName('Николай');
echo $objectFather->getName();
echo '  ';

$objectChild->setMotherAge(25);
echo $objectChild->getMotherAge();
echo '  ';

$objectChild->setFatherAge(35);
echo $objectChild->getFatherAge();
echo '  ';

$objectFather->setWifeName('Люба');
echo $objectFather->getWifeName();
echo '  ';

$objectMother->setHusbandName('Николай');
echo $objectMother->getHusbandName();
echo '  ';

$objectFamily->setChildSex(6);
echo $objectFamily->getChildSex();
echo '  ';

$objectFamily->setFatherAge(35);
echo $objectFamily->getFatherAge();
echo '  ';
