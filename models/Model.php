<?php

abstract class Model
{
	private array $_extra = [];

	public function __toString(): string
	{
		return json_encode(get_object_vars($this));
	}

	public function __call($method, $args): mixed
	{
		if (strpos($method, 'get') === 0) {
			$property = lcfirst(substr($method, 3));
			if (property_exists($this, $property)) {
				return $this->{$property};
			}
		}

		if (strpos($method, 'set') === 0) {
			$property = lcfirst(substr($method, 3));
			if (property_exists($this, $property)) {
				$this->$property = $args[0];
			}
		}

		return "Sorry, {$method} method doesn't exits.";
	}

	public function __get($property): mixed
	{
		if (array_key_exists($property, $this->_extra)) {
			return $this->_extra[$property];
		}

		return "Sorry, {$property} property doesn't exist.";
	}

	public function __set($property, $value): void
	{
		$this->_extra[$property] = $value;
	}
}