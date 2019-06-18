#include <iostream>
#include "Transaction.h"

Transaction::Transaction(Account* account, TransactionType transactionType, double amount) {
    this->account = account;
    this->transactionType = transactionType;
    this->amount = amount;
}

void Transaction::deposit() {
    this->account->deposit(this->amount);
}

void Transaction::withdraw() {
    this->account->withdraw(this->amount);
}

void Transaction::printBalance(const std::string& threadName) {
    std::cout << "Thread " << threadName << ", AccountNumber: " << this->account->getAccountNumber()
    << + ", TransactionType: " << this->getTransactionType() << ", Amount: " << this->amount << std::endl;

    std::cout << "Account Balance : " << this->account->getAccountBalance() << std::endl;
}

TransactionType Transaction::getTransactionType() {
    return this->transactionType;
}