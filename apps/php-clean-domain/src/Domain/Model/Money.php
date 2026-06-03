<?php

declare(strict_types=1);

namespace AndrzejSzelkaDev\PhpCleanDomain\Domain\Model;

use InvalidArgumentException;

final readonly class Money
{
    private function __construct(
        private int $amount,
        private string $currency
    ) {}

    public static function PLN(int $amount): self
    {
        return new self($amount, 'PLN');
    }

    public function add(self $other): self
    {
        if ($this->currency !== $other->currency) {
            throw new InvalidArgumentException('Cannot add money in different currencies.');
        }

        return new self(
            $this->amount + $other->amount,
            $this->currency
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }
}
