cmake_minimum_required(VERSION 3.13)
project(untitled C)

set(CMAKE_C_STANDARD 99)

add_executable(untitled src/main.c src/manipCompte.c src/manipCompte.h src/test.c src/test.h src/gereClients.c src/gereClients.h src/lectureClientFile.h src/lectureClientFile.c)