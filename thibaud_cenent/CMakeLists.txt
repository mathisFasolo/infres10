cmake_minimum_required(VERSION 3.14)
project(thibaud_cenent)

set(CMAKE_CXX_STANDARD 17)

add_executable(thibaud_cenent main.cpp classes/Account.h classes/Account.cpp classes/Transaction.h classes/Transaction.cpp)