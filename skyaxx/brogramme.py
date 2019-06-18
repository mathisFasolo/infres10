##################################
#            SKYAXX              #
# Etienne Platini                #
# Mathieu Gardette               #
# Mathis Fasolo                  #
##################################

import sys
import os
import time
from Transformation import Transformation
from backup import backup, restore


def process(transformation):
    while len(transformation):
        try:
            transformation.transform()
            backup(transformation)
            time.sleep(1)
        except Exception as e:
            exit(f"Une erreur est survenue désolé bro : {e}")
    os.remove("./temp/backup.bcp")
    return transformation


if __name__ == '__main__':
    """
    USAGE: 
    python3 brogramme.py :valeur :operations[]
    RECOVERY MODE:
    python3 brogramme.py
    """
    if len(sys.argv) <= 2:
        if os.path.exists("./temp/backup.bcp"):
            print("RECOVERY MODE BRO !")
            data = restore()
            result = process(data)
            print("Résultat Final Bro :")
            print(result)
        else:
            exit("Il manque un argument bro c'est nombre initial suivi des instructions")
    else:
        try:
            valeur_client = int(sys.argv[1])
            instructions = sys.argv[2:]
            whitelist = ["add", "sub"]

            for instruction in instructions:
                if instruction not in whitelist:
                    exit("Bro tu as pas respecter le contrat bro")

            init_transformation = Transformation(_valeur=valeur_client, _list_instructions=instructions)
            # initial backup
            backup(init_transformation)
            # Run Process
            result = process(init_transformation)
            # End
            print("Résultat Final Bro :")
            print(result)

        except ValueError:
            exit('Bro tu dois mettre un int en parametre bro')


