#include <stdio.h>
#include <stdlib.h>

#include "manipCompte.h"
#include "gereClients.h"
#include "test.h"

int main(void) {
    testManipCompte();
    testGereClient();
    testCpteSuisse();
    testClientSuspicieux();
    testTriClients();
    testAnomalies();
    return EXIT_SUCCESS;
}
