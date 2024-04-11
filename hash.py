import hashlib


def hash_MD5(data: str) -> str:
    return hashlib.md5(data.encode()).hexdigest()


print(hash_MD5("Hello, World!"))