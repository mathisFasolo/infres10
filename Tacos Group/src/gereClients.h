#ifndef GERE_CLIENTS_H_
#define GERE_CLIENTS_H_

#define MAX_IDENT_NAME 15

#include "manipCompte.h"

typedef struct CpteCLIENT {
	char *name;
	CPTEBQUE *cpteCourant;
	CPTEBQUE *cpteSuisse;
} CLIENT;

typedef struct NomIndexCpte {
	char *name;
	int *index;
} CpteDesc;

// creer et initialise les comptes clients à partir de Clients.txt
void createTabClients();

// Affiche le nom de tout les clients
void afficherClients();

// Affiche le nom des clients et leurs comptes
void afficherCpteClients();

// Affiche le nom des clients et leurs solde
void afficherRefClients();

/************************/

int getNbCompteSuisse();

CpteDesc *clientCpteSuisse();

void afficherCpteSuisse(CpteDesc *cpteSuisses);

/************************/

int getNbClientSuspicieux();

CpteDesc *clientSuspicieux();

void afficherClientSuspicieux(CpteDesc *cpteSuspicieux);

/************************/

void afficherClientsTrie(CLIENT* clientsTries);

CLIENT *triNomClient();

/************************/

int getNbAnomalies();

CPTEBQUE *getAnomalies();

void afficherAnomalie(CPTEBQUE *anomalies);

#endif
