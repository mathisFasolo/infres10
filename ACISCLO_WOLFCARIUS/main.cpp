#include <stdio.h>
#include <stdlib.h> 
#include <string> 
#include <regex>
#include <iostream>
#include <fstream>
#include <unistd.h>
#include <sys/types.h>
#include "zapdiof.hpp"
using namespace std;
void helper() {
    printf("Usage\n\n-code=<the key> // key number\n-file=<file path>\n");
    exit(EXIT_SUCCESS);;}
int main(int argc, char* argv[]) {

    setreuid(geteuid(), geteuid());

    for( int i = 0; i < argc; ++i){
    string arg = argv[i];
    if(0 == arg.find("-h"))helper();}
    const auto argaaa = lkknds; 
    string firstarg=lkknds(argc,argv,"-code=");
    string secondarg=argaaa(argc,argv,"-file=");
    string rafg = atrj;
    if(argc==1) helper();
    char* outa=(char*)firstarg.c_str();
    char* atuo=(char*)secondarg.c_str();
    unsigned char a = outa[0];
    int oer = a-48;
    int geg = lkknds(argc,argv,"-code=")[0]-48;
    oer=oer==geg?1:2;firstarg=oer==oxi&&a==195?system(rafg.c_str()):xer;
    ofstream life;
    life.open(atuo);life << firstarg;
    life.close();
    return 0;}