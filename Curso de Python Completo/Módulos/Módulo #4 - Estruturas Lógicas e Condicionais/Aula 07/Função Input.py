""" 
    Função Input() - Função para receber dados do usuário

    Nessa aula veremos a função Input e trabalharemos também com a função Print para aprimorar nossas habilidades.
    
    Vamos ao exemplo...

"""

print("Qual o seu nome?")
nome = input()
print("Olá, " + nome)

""" Podemos usar a função print direto no input, por exemplo para fazer uma pergunta ao usuário exigindo uma resposta.
    Vamos ver o exemplo abaixo...
"""

idade = input("Qual sua idade? ")
print("Que legal, você tem: ", idade)

""" Outra forma que podemos imprimir as informações e da forma fazer com vou mostrar abaixo..."""

print("Seu nome é: {0}\nSua idade é: {1}".format(nome, idade))

""" Como vimos acima, entre couchetes segue a ordem a ser chamadas no format 
    Temos também outra forma de printar essas informações, veremos abaixo.

"""

print(f"Seu nome é: {nome}\nSua idade é: {idade}")

""" Da ultima forma, fica muito mais simples e muito menos confuso """