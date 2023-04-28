<?php

class SavingsAccount extends Account
{

    public function __construct(int $numberAccount, float $balance, float $interestRate, private int $minimalSum)
    {
        parent::__construct($numberAccount, $balance, $interestRate);
    }

    public function getMinimalSum(): int
    {
        return $this->minimalSum;
    }

    public function setMinimalSum(int $minimalSum) : void
    {
        $this->minimalSum = $minimalSum;
    }

    public function calculationRate() : float
    {
        if ($this->getBalance() >= $this->getMinimalSum()) {
            $additionalSum = ($this->getBalance() * $this->getInterestRate()) / 100;
            $this->setBalance(round($this->getBalance() + $additionalSum, 2));
            return $this->getBalance();
        } else {
            return $this->getBalance();
        }
    }



}