#include <iostream>
#include "Transaction.h"

Transaction::Transaction(Account account, TransactionType transactionType, double amount) {
    this->transactionType = transactionType;
    this->account = account;
    this->amount = amount;
}

void Transaction::deposit() {
    this->account.deposit(this->amount);
}

void Transaction::withDraw() {
    this->account.withDraw(this->amount);
}

void Transaction::printBalance(const std::string& threadName) {
    std::cout << "Thread " << threadName << ", TransactionType: " << this->getTransactionType() << ", Amount: " << this->amount << std::endl;
    std::cout << "Account Balance : " << this->account.getAccountBalance() << std::endl;
}

TransactionType Transaction::getTransactionType() {
    return this->transactionType;
}