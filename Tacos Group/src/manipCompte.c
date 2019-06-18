#include "stdio.h"
#include "stdlib.h"

#include "manipCompte.h"

CPTEBQUE *createCpte (double debit, double credit, int ident) {
    CPTEBQUE *cpte = malloc(sizeof(CPTEBQUE));
    cpte->debit = debit;
    cpte->credit = credit;
    cpte->ident = ident;
    return cpte;
}

void afficheCpte (CPTEBQUE *cpte) {
    if (cpte->ident != CPTE_INEXISTANT) {
        printf("ID CPTE : %d | CREDIT : %.3f | DEBIT : %.3f \n", cpte->ident, cpte->debit, cpte->credit);
    } else {
        printf("Compte inexistant\n");
    }
}

double etatCpte (CPTEBQUE *cpte) {
    return cpte->credit - cpte->debit;
}

int CpteAPb (CPTEBQUE *cpte) {
    if (etatCpte(cpte)<0) {
        return CPTE_PB;
    } else {
        return CPTE_SANS_PB;
    }
}

void afficheIdEtSolde (CPTEBQUE *cpte) {
if (cpte->ident != CPTE_INEXISTANT) {
        printf("ID CPTE : %d | SOLDE : %.3f \n", cpte->ident, etatCpte(cpte));
    } else {
        printf("Compte inexistant\n");
    }
}
