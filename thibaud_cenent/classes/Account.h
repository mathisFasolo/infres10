#ifndef RACE_CONDITIONS_ACCOUNT_H
#define RACE_CONDITIONS_ACCOUNT_H

class Account {
    private:
        int accountNumber;
        double accountBalance;

    public:
        Account(int accountNumber);
        Account();
        double getAccountBalance();
        void deposit(double amount);
        void withdraw(double amount);
        int getAccountNumber();
};

#endif
