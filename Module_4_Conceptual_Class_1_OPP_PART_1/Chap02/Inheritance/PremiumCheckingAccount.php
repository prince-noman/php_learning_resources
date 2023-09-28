<?php

require 'Chap02/Inheritance/CheckingAccount.php';

//[Son]
class PremiumCheckingAccount extends CheckingAccount
{
    public $minimumBalance = 10000;
}

$PremiumCheckingAccount = new PremiumCheckingAccount();
echo $PremiumCheckingAccount->minimumBalance . PHP_EOL;

//We are accessing the methods from the Account Class [Which can be addressed as GrandFather of this class]
echo $PremiumCheckingAccount->deposite( 20000 );
echo $PremiumCheckingAccount->withdraw( 500 );
