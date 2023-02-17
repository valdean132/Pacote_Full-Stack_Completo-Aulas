"""

    Como descobrir se um número é impar ou par

"""

# 0/2, 2/2, 4/2 ... => Divisão inteira, ou seja, não há números decimais (Após a virgula)

print(30 * "-")
numero = int(input("Insira o número para saber se é par: "))

if (numero % 2) == 0:
    print(f"{numero} é um número par")
else:
    print(f"{numero} é um número impar")
print(30 * "-")