import os
from operations import sub, add


class Transformation(object):
    def __init__(self, _valeur, _list_instructions):
        self.valeur: int = _valeur
        self.historique = []
        self.instructions = _list_instructions

    def transform(self):
        current_instruction = self.instructions.pop(-1)
        if current_instruction == 'add':
            self.valeur = add(self.valeur)
        elif current_instruction == 'sub':
            self.valeur = sub(self.valeur)
        else:
            raise Exception('Bro ton objet transformation est cassé')
        self.historique.append(current_instruction)

    def __len__(self):
        return len(self.instructions)

    def __str__(self):
        return f"TRANSFORMATION: valeur = {self.valeur}, historique = {self.historique}"


