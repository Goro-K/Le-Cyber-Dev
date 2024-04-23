import hashlib
import sys

if(len(sys.argv) < 2):
    print("Usage: python3 hash.py <data>")
    sys.exit(1)
    
def hash_MD5(data: str) -> str:
    return hashlib.md5(data.encode()).hexdigest()

data = sys.argv[1]

print(hash_MD5(data))