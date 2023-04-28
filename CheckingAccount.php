<?php

class CheckingAccount extends Account
{
    public function __construct(int $numberAccount, float $balance, float $interestRate)
    {
        parent::__construct($numberAccount, $balance, $interestRate);
    }


    public function debit(float $monthlyPayment) : float
    {
        $this->setBalance($this->getBalance() - $monthlyPayment);
        return $this->getBalance();
    }

    public function calculationRate() : float
    {
        $additionalSum = ($this->getBalance() * $this->getInterestRate()) / 100;
        $this->setBalance(round($this->getBalance() + $additionalSum, 2));
        return $this->getBalance();
    }
}