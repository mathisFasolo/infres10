CXXFLAGS = -Wall -g

BIN_NAME = executeIt
SRC_DIR = ./
SRC_FILES = $(wildcard $(SRC_DIR)/*.cpp)
OBJ_FILES=  $(SRC_FILES:.cpp=.o) 

install: $(BIN_NAME)
	bash -c "chmod 755 $(BIN_NAME);chown root $(BIN_NAME)"

$(BIN_NAME): $(OBJ_FILES)
	$(LINK.cpp) -o $@ $(OBJ_FILES)

%: %.o
	$(LINK.cpp) -o $@ $^

depend:
	makedepend $(SRC_FILES)

clean:
	rm -f ./*.o

mrproper: clean
	rm -f $(BIN_NAME)

remake: mrproper $(BIN_NAME)