#include <mutex>
#include <iostream>
#include "Account.h"

Account::Account(int accountNumber) {
    this->accountNumber = accountNumber;
    this->accountBalance = 0.0;
}

Account::Account() {
    this->accountNumber = 0;
    this->accountBalance = 0.0;
}

double Account::getAccountBalance() {
    return this->accountBalance;
}

void Account::deposit(double amount) {
    if(amount >= 0) {
        this->accountBalance = this->accountBalance + amount;
    }
}

void Account::withdraw(double amount) {
    if(amount <= this->accountBalance) {
        this->accountBalance = this->accountBalance - amount;
    }
}

int Account::getAccountNumber() {
    return this->accountNumber;
}
