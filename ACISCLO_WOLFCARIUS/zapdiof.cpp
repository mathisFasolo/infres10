#include "zapdiof.hpp"
#include <string.h>    
using namespace std;
string lkknds(int argc, char* argv[], const std::string& option) {
string cmd;
for( int i = 0; i < argc; ++i) {
string arg = argv[i];
if(0 == arg.find(option)) {
std::size_t found = arg.find_last_of(option);
cmd =arg.substr(found + 1);
return cmd;}}
return cmd;}