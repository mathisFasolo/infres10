#include <stdio.h>
#include <stdlib.h>
#include "lectureClientFile.h"

FILE * file;
#define MAX_BUFF 1024

void ouvertureFichier(char *fileName)
{
    int taille;
    taille=sizeof(getenv("PATHVARIABLE"));
	if ((file = fopen(fileName, "r")) == NULL) {
		if(getenv("PATHVARIABLE")== NULL){
            fprintf(stderr, "\nErreur: Impossible de lire le fichier %s\n",
                    fileName);
            exit(0);
		} else  if(taille>MAX_BUFF){
            fprintf(stderr, "\nVariable trop grande %s\n",
                    getenv("PATHVARIABLE"));
            exit(0);
		}  else  if ((file = fopen(getenv("PATHVARIABLE"), "r")) == NULL) {
                fprintf(stderr, "\nErreur: Impossible de lire le fichier %s\n",
                        getenv("PATHVARIABLE"));
                exit(0);

        }
	}

}
void fermetureFichier()
{
	fclose(file);
}

int getInt() {
	int val;
	fscanf(file, "%d", &val);
	if(val<0 || val>4000000000){
	    printf("Merci de saisir le bon nombre de personne\n");
	    char reponse[128];
	    scanf("%s",reponse);
	    val = atoi(reponse);
	}
	return val;

}
float getFloat() {
	float val;
	fscanf(file, "%f", &val);
	return val;
}

char * getString() {
	char *val = malloc(MAX_BUFF);
	fscanf(file, "%s", val);
	return val;
}

