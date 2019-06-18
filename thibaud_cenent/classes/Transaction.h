#ifndef RACE_CONDITIONS_TRANSACTION_H
#define RACE_CONDITIONS_TRANSACTION_H

#include "Account.h"

enum TransactionType {
    DEPOSIT = 1,
    WITHDRAW = 2
};


class Transaction{
    private:
        TransactionType  transactionType;
        Account* account;
        double amount;

    public:
        Transaction(Account *account, TransactionType  transactionType, double amount);
        void deposit();
        void withdraw();
        void printBalance(const std::string& threadName);
        TransactionType getTransactionType();
};

#endif
