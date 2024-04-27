import hashlib
import sys

if(len(sys.argv) < 3):
    print("Usage: python3 hash.py <data>")
    sys.exit(1)
    
def hash_MD5(data: str, hash_value: str) -> str:
    if hash_value == "md5":
        return hashlib.md5(data.encode()).hexdigest()
    elif hash_value == "sha256":
        return hashlib.sha256(data.encode()).hexdigest()
    elif hash_value == "sha512":
        return hashlib.sha512(data.encode()).hexdigest()
    else:
        print("Veuillez choisir un type de chiffrage parmi md5, sha256, sha512")
        sys.exit(1)


# hash
data = sys.argv[1]
hash_value = sys.argv[2]

print(hash_MD5(data, hash_value))