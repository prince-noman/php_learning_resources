<?php
require 'Chap02/Inheritance/Account.php';

// [Father]
class CheckingAccount extends Account
{
    public function transfer( $amount )
    {
        echo "Transfering $amount from checking account \n";
    }
}

$checkingAccount = new CheckingAccount();

//We are accessing the methods from the Account Class [Which can be addressed as Father of this class]
// $checkingAccount->deposite( 100 );
// $checkingAccount->withdraw( 50 );
// $checkingAccount->transfer( 50 );

//Task
// Create a PremiumCheckingAccount class which extends CheckingAccount
// Give it a public $minimumBalance property with a default value
// Echo out $premiumCheckingAccount->minimumBalance in inheritance.php
// Call all of the methods which it inherits
