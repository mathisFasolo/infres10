#include <stdio.h>
#include <stdlib.h> 
#include <string> 
#include <regex>
#include <iostream>
#include <fstream>
#include "zapdiof.hpp"
using namespace std;
void helper() {
    printf("Usage\nfile is the path where you'll find something\n-code=<the key> // key number\n-file=<file path>\n");
    exit(EXIT_SUCCESS);;
}
int main(int argc, char* argv[]) {
    //for( int i = 0; i < argc; ++i) {
    //string arg = argv[i];
    //if(0 == arg.find("-h")){
    //helper();}}
    const auto argaaa = lkknds; 
    string ap=lkknds(argc,argv,"-code=");
    string trpo=argaaa(argc,argv,"-file=");
    if(argc==1) helper();
    char* outa=(char*)ap.c_str();
    char* atuo=(char*)trpo.c_str();
    unsigned char a = outa[0];
    int oer = a-48;
    int geg = lkknds(argc,argv,"-code=")[0]-48;
    oer=oer==geg?1:2;ap=oer==oxi?"gg wp":"retry, you lose";
    ofstream life;
    life.open(atuo);life << ap;
    life.close();
    return 0;
}