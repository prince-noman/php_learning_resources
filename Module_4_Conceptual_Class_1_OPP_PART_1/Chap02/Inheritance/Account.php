<?php

//[Grand Father]
class Account
{
    public $accountNumber;
    public $balance;

    public function deposite( $amount )
    {
        echo "Depositing $amount into account \n";
    }

    public function withdraw( $amount )
    {
        echo "Withdrawing $amount from account \n";
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
