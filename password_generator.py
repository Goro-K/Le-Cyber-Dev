# Description: Générateur de mot de passe
# un mot de passe de plus de 15 caractères
# au moins une lettre majuscule
# au moins une lettre minuscule
# au moins un chiffre
# au moins un caractère spécial

import string
import secrets

length = int(input("Choisissez la taille de votre mdp : "))
letters = string.ascii_letters
digits = string.digits
special = string.punctuation
alphabet = letters + digits + special
password = ''
for char in range(length):
    password += ''.join(secrets.choice(alphabet))
    if(any(char in special for char in password) and sum(char in digits for char in password)>=2):
        break

if(length < 16):
    print(password)
else:
    print("Le mot de passe est trop court")