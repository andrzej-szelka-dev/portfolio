<?php

declare(strict_types=1);

namespace AndrzejSzelkaDev\PhpCleanDomain\Tests;

use AndrzejSzelkaDev\PhpCleanDomain\Domain\Model\Money;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Money::class)]
class MoneyTest extends TestCase
{
    public function test_it_can_be_created_from_amount_and_currency(): void
    {
        // Act
        $money = Money::PLN(1000); // 10.00 PLN (zapisujemy w groszach!)

        // Assert
        $this->assertSame(1000, $money->getAmount());
        $this->assertSame('PLN', $money->getCurrency());
    }

    public function test_it_can_add_money_with_same_currency(): void
    {
        // Arrange
        $money1 = Money::PLN(1000); // 10.00 PLN
        $money2 = Money::PLN(550);  //  5.50 PLN

        // Act
        $result = $money1->add($money2);

        // Assert
        $this->assertSame(1550, $result->getAmount());
        $this->assertSame('PLN', $result->getCurrency());
        
        // Immutability check (Obiekty wartości powinny być niezmienne)
        $this->assertNotSame($money1, $result);
    }
}
