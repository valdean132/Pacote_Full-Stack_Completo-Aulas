"""
    Exercícios - Python
    
    Obs.: Todos os execícios devem utilizar a função INPUT, de forma que o usuário possa determinar os dados de entrada.
    
    01 - Área de um retângulo => Resolvido
    02 - Área de um quadrado => Resolvido
    03 - Se o produto que você quer avaliar custa (??) reais qual será o valor do mesmo com desconto de (??)% => Resolvido
    04 - Área de um círculo => pi = 3,141592
    05 - conversão de reais para dolar
    06 - conversão de dolar para reais
    
"""

#? Ex. 01 - Área de um retângulo ?#
# print("***--***")
# print("Informa a base e altura para descobrir a área de um retangulo:")
# print("==== *** ====")
# base = input("Informe o valor da Base?\n")
# altura = input("Informe o valor da Altura?\n")
# area = float(base) * float(altura)
# print("==== *** ====")
# print(f'Multiplicando a base de {base} e a altura de {altura} temos o área de {area}')
# print("***--***")

#? Ex. 02 - Área de um quadrado ?#
# print("***--***")
# print("Informa a altura para descobrir a área de um quadrado:")
# print("==== *** ====")
# altura = input("Informe o valor da Altura?\n")
# area = float(altura) ** 2
# print("==== *** ====")
# print(f'Elevando a altura de {altura} por 2 temos o área de {area}')
# print("***--***")

#? Ex. 03 - Aplicando desconto ?#
# print("***--***")
# print("Informe um valor sem desconto e o valor em % com o desconto:")
# print("==== *** ====")
# valor = input("Qual o Valor total?\n Valor: ")
# desconto = input("Qual o desconto em %?\n Desconto: ")
# descAplicado = float(valor) * (float(desconto)/100)
# print("==== *** ====")
# print(f'Aplicando o descondo de {desconto}% ao valor de {valor} reais teremos {descAplicado} reais com o desconto.')
# print("***--***")

#? Ex. 04 - Área de um circulo ?#
# print("***--***")
# print("Informa o raio do circulo para calcular sua área:")
# print("==== *** ====")
# raio = input("Qual o valor do raio?\n Raio: ")
# pi = 3.141592
# area = pi * (float(raio) ** 2)
# print("==== *** ====")
# print(f'Elevando o raio de {raio} por 2 temos e multiplicando pelo pi que é aproximandamente {pi} temos a área de {area}')
# print("***--***")

#? Ex. 05 - Conversão de reais para dolar ?#
# print("***--***")
# print("Informe um valor que deseja converter para o dolar:")
# print("==== *** ====")
# real = input("Qual o Valor?\n Valor: ")
# dolar = .20
# conversao = dolar * float(real)
# print("==== *** ====")
# print(f'Aplicando convertendo o seu valor de {real} reais para o dolar que está em {dolar} centavos americanos, teremos {conversao} dolares')
# print("***--***")

#? Ex. 06 - Conversão de reais para dolar ?#
# print("***--***")
# print("Informe um valor que deseja converter para o real:")
# print("==== *** ====")
# dolar = input("Qual o Valor?\n Valor: ")
# real = 5.11
# conversao = real * float(dolar)
# print("==== *** ====")
# print(f'Aplicando convertendo o seu valor de {real} dolares para o real que está em {real} reais, teremos {conversao} Reais')
# print("***--***")