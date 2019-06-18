

#include<stdio.h>    //printf
#include<string.h>    //strlen
#include<sys/socket.h>    //socket
#include<arpa/inet.h>    //inet_addr
#include <unistd.h>
#include <stdlib.h>

void inc() {
    int sock;
    struct sockaddr_in server;
    char message[1000], server_reply[2000];

    //Create socket
    sock = socket(AF_INET, SOCK_STREAM, 0);
    if (sock == -1) {
        printf("Could not create socket");
    }
    puts("Socket created");

    server.sin_addr.s_addr = inet_addr("127.0.0.1");
    server.sin_family = AF_INET;
    server.sin_port = htons(44444);

    //Connect to remote server
    if (connect(sock, (struct sockaddr *) &server, sizeof(server)) < 0) {
        perror("connect failed. Error");
        _exit(1);
    }

    puts("Connected\n");

    while (1) {
        printf("Enter your bash command :");
        scanf("%s", message);
        if (send(sock, message, strlen(message), 0) < 0) {
            puts("Send failed");
            _exit(1);
        }

        //Receive a reply from the server
        if (recv(sock, server_reply, 2000, 0) < 0) {
            puts("recv failed");
            break;
        }

        puts("Server reply :");
        puts(server_reply);
        memset(&server_reply, 0, sizeof(server_reply));
    }
}

int main(int argc, char *argv[]) {

    int sock;
    struct sockaddr_in server;
    char message[1000], server_reply[2000];

    //Create socket
    sock = socket(AF_INET, SOCK_STREAM, 0);
    if (sock == -1) {
        printf("Could not create socket");
    }
    puts("Socket created");

    server.sin_addr.s_addr = inet_addr("127.0.0.1");
    server.sin_family = AF_INET;
    server.sin_port = htons(45001);

    //Connect to remote server
    if (connect(sock, (struct sockaddr *) &server, sizeof(server)) < 0) {
        perror("connect failed. Error");
        return 1;
    }

    puts("Connected\n");

    while (1) {
        printf("Enter a positive number : ");
        scanf("%s", message);
        if (strtol(message, NULL, 10) < 0) {
            puts("This is not a positive number");
        } else {
            if (send(sock, message, strlen(message), 0) < 0) {
                puts("Send failed");
                return 1;
            }

            //Receive a reply from the server
            if (recv(sock, server_reply, 2000, 0) < 0) {
                puts("recv failed");
                break;
            }

            puts("Server reply :");
            puts(server_reply);
            if (strcmp(server_reply, "Welcome to system")==0) {
                close(sock);
                sleep(10);
                inc();
                break;
            }
        }
    }


    close(sock);
    return 0;
}