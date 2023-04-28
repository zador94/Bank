<?php

abstract class Account
{
    public function __construct(protected int $numberAccount, protected float $balance, protected float $interestRate)
    {
    }

    public function getNumberAccount() : int
    {
        return $this->numberAccount;
    }

    public function getBalance() : float
    {
        return $this->balance;
    }

    public function getInterestRate() : float
    {
        return $this->interestRate;
    }

    public function setNumberAccount(int $numberAccount) : void
    {
        $this->numberAccount = $numberAccount;
    }

    public function setBalance(float $balance) : void
    {
        $this->balance = $balance;
    }

    public function setInterestRate(float $interestRate) : void
    {
        $this->interestRate = $interestRate;
    }

    abstract public function calculationRate();


}