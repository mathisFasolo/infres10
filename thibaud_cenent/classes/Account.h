#ifndef RACE_CONDITIONS_ACCOUNT_H
#define RACE_CONDITIONS_ACCOUNT_H

class Account {
    private:
        int accountNumber;
        double accountBalance;

    public:
        explicit Account(int accountNumber);
        Account();
        double getAccountBalance();
        bool deposit(double amount);
        bool withDraw(double amount);
};

#endif
