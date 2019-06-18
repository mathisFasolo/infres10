#include "test.h"

#include <stdio.h>
#include <stdlib.h>

#include "manipCompte.h"
#include "gereClients.h"
#include "manipCompte.h"

void testManipCompte() {
    printf("**************************\n");
    printf("* DEBUT TEST manipCompte *\n");
    printf("**************************\n\n");
    CPTEBQUE *cpte1 = createCpte (10.0, 11.0, 1);
    CPTEBQUE *cpte2 = createCpte (11.0, 10.0, 2);
    printf("Compte 1 : (1,10,11)\n");
	afficheCpte(cpte1);
	printf ("Doit etre egale a 0 : %d \n", CpteAPb(cpte1));
	printf("\nCompte 2: (2,11,10)\n");
	afficheCpte(cpte2);
	printf ("Doit etre egale a 1 : %d \n", CpteAPb(cpte2));
	printf("\n************************\n");
    printf("* FIN TEST manipCompte *\n");
    printf("************************\n\n");
}

void testGereClient() {
    printf("*************************\n");
    printf("* DEBUT TEST gereClient *\n");
    printf("*************************\n\n");

    createTabClients();
    printf ("*** Listes des clients : **********\n\n");
    afficherClients();
    printf ("\n*** Listes des comptes clients : **********\n\n");
    afficherCpteClients();
    printf ("\n*** Listes des refs clients : **********\n\n");
    afficherRefClients();

    printf("\n***********************\n");
    printf("* FIN TEST gereClient *\n");
    printf("***********************\n\n");
}

void testCpteSuisse() {
    printf("*************************\n");
    printf("* DEBUT TEST CpteSuisse *\n");
    printf("*************************\n\n");

    createTabClients();
    CpteDesc *cpteSuisses = clientCpteSuisse();
    afficherCpteSuisse(cpteSuisses);

    printf("\n***********************\n");
    printf("* FIN TEST cpteSuisse *\n");
    printf("***********************\n\n");
}

void testClientSuspicieux() {
    printf("*****************************\n");
    printf("* DEBUT TEST CpteSuspicieux *\n");
    printf("*****************************\n\n");

    createTabClients();
    CpteDesc *cpteSuspicieux = clientSuspicieux();
    afficherClientSuspicieux(cpteSuspicieux);

    printf("\n***************************\n");
    printf("* FIN TEST CpteSuspicieux *\n");
    printf("***************************\n\n");
}

void testTriClients() {
    printf("*************************\n");
    printf("* DEBUT TEST TriClients *\n");
    printf("*************************\n\n");

    createTabClients();
    CLIENT* mesClients = triNomClient();
    afficherClientsTrie(mesClients);

    printf("\n***********************\n");
    printf("* FIN TEST TriClients *\n");
    printf("***********************\n\n");
}

void testAnomalies() {
    printf("************************\n");
    printf("* DEBUT TEST Anomalies *\n");
    printf("************************\n\n");

    createTabClients();
    CPTEBQUE* cpteAnomalie = getAnomalies();
    afficherAnomalie(cpteAnomalie);

    printf("\n**********************\n");
    printf("* FIN TEST Anomalies *\n");
    printf("**********************\n\n");
}
