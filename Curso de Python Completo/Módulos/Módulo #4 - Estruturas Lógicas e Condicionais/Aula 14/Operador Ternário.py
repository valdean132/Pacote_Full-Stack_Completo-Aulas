"""
    Operador Ternário - Encurtando os IF's e ELIF's
"""

a = 8
b = 3
c = 2

"""
if b > a:
    print("B é maior que A")

if b > a: print("B é maior que A")
"""

# print("B") if b > a else print("A") # <== Operador ternário (Expressões Condicionais)

if a > b:
    print("A")
    if a > c:
        print("A")