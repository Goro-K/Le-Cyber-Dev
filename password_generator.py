# Description: Générateur de mot de passe
# un mot de passe de plus de 15 caractères
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
letters = sys.argv[2]
digits = sys.argv[3]
special = sys.argv[4]

characterList = []

if letters == 'on':
    characterList += string.ascii_letters
if digits == 'on':
    characterList += string.digits
if special == 'on':
    characterList += string.punctuation

if not characterList:
    print("Il faut choisir au moins un type de caractère")
    exit(1)

for char in range(length):
    randomChar = ''.join(secrets.choice(characterList))
    password.append(randomChar)

print("The random password is " + "".join(password))