<?php

namespace Utilities;

trait Accessor
{
	public function __get($name)
	{
		$getter = "get{$name}";

		if (method_exists($this, $getter))
			return $this->$getter();
	}

	public function __set($name, $value)
	{
		$setter = "set{$name}";

		if (method_exists($this, $setter))
			return $this->$setter($value);
	}

	public function __isset($name)
	{
		$issetter = "isset{$name}";

		if (method_exists($this, $issetter))
			return $this->$issetter();
	}

	public function __unset($name)
	{
		$unsetter = "unset{$name}";

		if (method_exists($this, $unsetter))
			return $this->$unsetter();
	}
}
