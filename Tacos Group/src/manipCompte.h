#ifndef MANIP_COMPTE_H_
#define MANIP_COMPTE_H_

#define CPTE_PB 1
#define CPTE_SANS_PB 0

#define CPTE_INEXISTANT 0

typedef struct CPTE
{ int ident;
  double credit;
  double debit;
} CPTEBQUE;

CPTEBQUE *createCpte (double debit, double credit, int ident);

void afficheCpte (CPTEBQUE *cpte);

void afficheIdEtSolde (CPTEBQUE *cpte);

double etatCpte (CPTEBQUE *cpte);

int CpteAPb (CPTEBQUE *cpte);

#endif
