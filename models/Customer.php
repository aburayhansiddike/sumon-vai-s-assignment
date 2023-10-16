<?php

require_once 'Model.php';

class Customer extends Model
{
	public function __construct(
		protected int $id,
		protected string $firstName,
		protected string $lastName,
		protected string $email
	) {
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function setId($id): void
	{
		$this->id = $id;
	}
}