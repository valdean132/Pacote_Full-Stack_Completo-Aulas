"""

    Do While

    Código para adivinhar um número

"""

palpite = 0
numero = 9

while True:  # Nós execultamos sem verificar
    print("Qual o número correto? ")
    palpite = int(input())

    if palpite == numero:  # Estamos verificando nossos códigos 
        print("Parabéns você acertou!!!")
        break
    else:
        print("Você errou! Tentende novo...")
else:
    print("Erro na aplicação!")
    print(bool(palpite))