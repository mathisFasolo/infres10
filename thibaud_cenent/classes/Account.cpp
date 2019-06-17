#include <mutex>
#include "Account.h"

Account::Account(int accountNumber) {
    this->accountNumber = accountNumber;
    this->accountBalance = 0;
}

Account::Account() {
    this->accountNumber = 0;
    this->accountNumber = 0;
};

double Account::getAccountBalance() {
    return this->accountBalance;
}

bool Account::deposit(double amount) {
    if(amount < 0) {
        return false;
    }

    this->accountBalance = this->accountBalance + amount;
    return true;
}

bool Account::withDraw(double amount) {
    if(amount > this->accountBalance) {
        return false;
    }

    this->accountBalance = this->accountBalance - amount;

    return true;
}
