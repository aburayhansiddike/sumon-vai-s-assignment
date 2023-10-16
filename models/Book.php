<?php

require_once 'Model.php';

class Book extends Model
{
	public function __construct(
		protected string $isbn,
		protected string $title,
		protected string $author,
		protected int $available = 0
	) {
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	public function getCopy(): bool
	{
		if (! $this->available) {
			return false;
		}

		$this->available--;

		return true;
	}

	public function addCopy($num): int
	{
		return $this->available += $num;
	}
}
