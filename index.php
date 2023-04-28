<?php

include 'splAutoload.php';

$savingAccount = new SavingsAccount(154365, 4515.15, 7, 2000);

echo 'Номер сберегательного счета: ' . $savingAccount->getNumberAccount() . '<br>'
    . 'Баланс: ' . $savingAccount->getBalance() . '<br>'
    . 'Процентная ставка: ' . $savingAccount->getInterestRate() . '<br>'
    . 'Баланс после начисления процентов: ' . $savingAccount->calculationRate() . '<br>';

echo '---------------------------------<br>';

$checkingAccount = new CheckingAccount(135468, 20543.65, 1.2);

echo 'Номер рассчетного счета: ' . $checkingAccount->getNumberAccount() . '<br>'
    . 'Баланс: ' . $checkingAccount->getBalance() . '<br>'
    . 'Процентная ставка: ' . $checkingAccount->getInterestRate() . '<br>'
    . 'Ежемесячный платеж: ' . $checkingAccount->debit(1526.15) . '<br>'
    . 'Начисление процентов на остаток от денежных средств: ' . $checkingAccount->calculationRate() . '<br>';