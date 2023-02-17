"""

    Exercício - Trocar variáveis

"""
# Trocando variáveis em Python.

x = input("Insira o valor de x: ")
y = input("Insira o valor de y: ")

# Criar uma variavel temporaria

temp = x
x = y
y = temp

print(f"O valor de x depois da troca: {x}")
print(f"O valor de y depois da troca: {y}")