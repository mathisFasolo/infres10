#include <iostream>
#include <thread>
#include <vector>
#include "classes/Account.h"
#include "classes/Transaction.h"

using namespace std;

void start(Transaction t, int threadId) {
    string threadName = "T" + std::to_string(threadId);

    switch (t.getTransactionType()) {
        case TransactionType::DEPOSIT:
            t.deposit();
            t.printBalance(threadName);
            break;

        case TransactionType::WITHDRAW:
            t.withdraw();
            t.printBalance(threadName);
            break;

        default:
            cout << "NOT A VALID TRANSACTION" << endl;
            break;
    }
}

int main() {
    Account myAccount(1);

    vector<std::thread> threads;

    int cpt = 0;

    for(int i = 0; i < 50; ++i) {
        Transaction t(myAccount, TransactionType::DEPOSIT, 5.00);
        threads.emplace_back(start, t, cpt);
        ++cpt;

    }

    for(int j = 0; j < 50; ++j) {
        Transaction t(myAccount, TransactionType::WITHDRAW, 1.00);
        threads.emplace_back(start, t, cpt);
        ++cpt;
    }

    for(auto && thread : threads) {
        thread.join();
    }

    cout << "Final Account Balance: " << myAccount.getAccountBalance() << endl;

    return 0;
}