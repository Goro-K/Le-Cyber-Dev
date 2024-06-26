# Description: Générateur de mot de passe aléatoire
# au moins une lettre majuscule
# au moins une lettre minuscule
# au moins un chiffre
# au moins un caractère spécial

import string
import secrets
import sys

# le mot de passe qui va être remplie
password = []

# taille du mot de passe
length = int(sys.argv[1])

# les types de caractères
lowercase = sys.argv[2]
uppercase = sys.argv[3]
digits = sys.argv[4]
special = sys.argv[5]


characterList = []

# on ajoute les caractères selon les types choisis
if lowercase == 'on':
    characterList += string.ascii_lowercase
if uppercase == 'on':
    characterList += string.ascii_uppercase
if digits == 'on':
    characterList += string.digits
if special == 'on':
    characterList += string.punctuation

if not characterList:
    print("Il faut choisir au moins un type de caractère")
    exit(1)


for char in range(length):
    # on choisit un caractère aléatoire
    randomChar = secrets.choice(characterList)
    # on ajoute le caractère aléatoire à la liste
    password.append(randomChar)

print("".join(password))