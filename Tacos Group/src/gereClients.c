#include "gereClients.h"

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "lectureClientFile.h"

CLIENT *clients;
int nbClient;

void createTabClients() {
    ouvertureFichier("../data/data/Clients.txt");
    nbClient = getInt();
    clients = malloc(sizeof(CLIENT)*nbClient);

    for (int i =0; i<nbClient; i++) {
        clients[i].name = getString();

        int idCompte = getInt();
        double credit = getFloat();
        double debit = getFloat();
        clients[i].cpteCourant = createCpte(debit, credit, idCompte);

        idCompte = getInt();
        if (idCompte == CPTE_INEXISTANT) {
            clients[i].cpteSuisse = createCpte(0, 0, idCompte);
        } else {
            credit = getFloat();
            debit = getFloat();
            clients[i].cpteSuisse = createCpte(debit, credit, idCompte);
        }
    }

    fermetureFichier();
}

void afficherClients() {
    for (int i=0; i<nbClient; i++) {
        printf(clients[i].name);
        printf("\n");
    }
}

void afficherCpteClients() {
    for (int i=0; i<nbClient; i++) {
        printf(clients[i].name);
        printf("\n");
        printf("Compte courant : ");
        afficheCpte(clients[i].cpteCourant);
        printf("Compte suisse : ");
        afficheCpte(clients[i].cpteSuisse);
        printf("\n");
    }
}

void afficherRefClients() {
    for (int i=0; i<nbClient; i++) {
        printf(clients[i].name);
        printf("\n");
        printf("Compte courant : ");
        afficheIdEtSolde(clients[i].cpteCourant);
        printf("Compte suisse : ");
        afficheIdEtSolde(clients[i].cpteSuisse);
        printf("\n");
    }
}

int getNbCompteSuisse() {
    int sum = 0;
    for (int i=0; i<nbClient; i++) {
        if (clients[i].cpteSuisse->ident != CPTE_INEXISTANT) {
            sum++;
        }
    }
    return sum;
}

CpteDesc *clientCpteSuisse() {
    int nbCompteSuisse = getNbCompteSuisse();
    CpteDesc *cpteSuisses = malloc(sizeof(CpteDesc)*nbCompteSuisse);

    int compteur = 0;
    for (int i=0; i<nbClient; i++) {
        if (clients[i].cpteSuisse->ident != CPTE_INEXISTANT) {
            cpteSuisses[compteur].name = clients[i].name;
            cpteSuisses[compteur].index = i;
            compteur++;
        }
    }
    return cpteSuisses;
}

void afficherCpteSuisse(CpteDesc *cpteSuisses) {
    int nbCompteSuisse = getNbCompteSuisse();
    for (int i = 0; i<nbCompteSuisse; i++) {
        printf("NAME : %s | INDEX : %d \n", cpteSuisses[i].name, cpteSuisses[i].index);
    }
}

int getNbClientSuspicieux() {
    int sum = 0;
    for (int i=0; i<nbClient; i++) {
        if (CpteAPb(clients[i].cpteCourant) == CPTE_PB) {
            if (CpteAPb(clients[i].cpteSuisse) == CPTE_PB || clients[i].cpteSuisse->ident== CPTE_INEXISTANT) {
                sum++;
            }
        }
    }
    return sum;
}

CpteDesc *clientSuspicieux() {
    int nbCompteSuspicieux = getNbClientSuspicieux();
    CpteDesc *cpteSuspicieux = malloc(sizeof(CpteDesc)*nbCompteSuspicieux);

    int compteur = 0;
    for (int i=0; i<nbClient; i++) {
        if (CpteAPb(clients[i].cpteCourant) == CPTE_PB) {
            if (CpteAPb(clients[i].cpteSuisse) == CPTE_PB || clients[i].cpteSuisse->ident== CPTE_INEXISTANT) {
                cpteSuspicieux[compteur].name = clients[i].name;
                cpteSuspicieux[compteur].index = i;
                compteur++;
            }
        }
    }
    return cpteSuspicieux;
}

void afficherClientSuspicieux(CpteDesc *cpteSuspicieux) {
    int nbCompteSuspicieux = getNbClientSuspicieux();
    for (int i = 0; i<nbCompteSuspicieux; i++) {
        printf("NAME : %s | INDEX : %d \n", cpteSuspicieux[i].name, cpteSuspicieux[i].index);
    }
}

void swap(CLIENT* clients, int a, int b) {
    CLIENT c = clients[a];
    clients[a] = clients[b];
    clients[b] = c;
}

CLIENT* triNomClient()
{
    CLIENT *tab = malloc(sizeof(CLIENT)*nbClient);
    for (int i=0; i<nbClient;i++) {
        tab[i] = clients[i];
    }

    int tab_en_ordre = 0;
    int taille = nbClient;
    while(tab_en_ordre==0)
    {
        tab_en_ordre = 1;
        for(int i=0 ; i < taille-1 ; i++)
        {
            //printf("%d %s %s \n", strcmp(tab[i].name,tab[i+1].name), tab[i].name, tab[i+1].name);
            if (strcmp(tab[i].name,tab[i+1].name)>0)
            {
                swap(tab,i,i+1);
                tab_en_ordre = 0;
            }
        }
        taille--;
    }
    return tab;
}

void afficherClientsTrie(CLIENT* clientsTries) {
    for (int i =0; i<nbClient; i++) {
        printf("%s \n",clientsTries[i].name);
    }
}

int getNbAnomalies() {
    int nbAnomalie = 0;
    for (int i=0; i<nbClient; i++) {
        int id1 = clients[i].cpteCourant->ident;
        int count1 = 0;
        int id2 = clients[i].cpteSuisse->ident;
        int count2 = 0;
        for (int j=0; j<nbClient; j++) {
            if (clients[j].cpteCourant->ident==id1) {
                count1++;
            }
            if (clients[i].cpteSuisse->ident!=CPTE_INEXISTANT) {
                if (clients[j].cpteSuisse->ident==id2) {
                    count2++;
                }
            }
        }
        if (count1>1) {
            nbAnomalie++;
        }
        if (count2>1) {
            nbAnomalie++;
        }
    }
    return nbAnomalie;
}

CPTEBQUE *getAnomalies() {
    int nbAnomalie = getNbAnomalies();
    CPTEBQUE* cpteAnomalie = malloc(sizeof(CPTEBQUE)*nbAnomalie);
    int pos = 0;

    for (int i=0; i<nbClient; i++) {
        CPTEBQUE* cpte1 = clients[i].cpteCourant;
        int count1 = 0;
        CPTEBQUE* cpte2 = clients[i].cpteSuisse;
        int count2 = 0;
        for (int j=0; j<nbClient; j++) {
            if (clients[j].cpteCourant->ident==cpte1->ident) {
                count1++;
            }
            if (cpte2->ident!=CPTE_INEXISTANT) {
                if (clients[j].cpteSuisse->ident==cpte2->ident) {
                    count2++;
                }
            }
        }
        if (count1>1) {
            cpteAnomalie[pos]=*cpte1;
            pos++;
        }
        if (count2>1) {
            cpteAnomalie[pos]=*cpte2;
            pos++;
        }
    }
    return cpteAnomalie;
}

void afficherAnomalie(CPTEBQUE *anomalies) {
    int nbAnomalie = getNbAnomalies();
    for (int i=0; i<nbAnomalie; i++) {
        afficheCpte(&anomalies[i]);
    }
}
