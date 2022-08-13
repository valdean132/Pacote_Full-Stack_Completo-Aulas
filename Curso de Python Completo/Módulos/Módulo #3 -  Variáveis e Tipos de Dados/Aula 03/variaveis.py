# Aula 03 - Variáveis
""" 
    Em linguagem de programação, as variáveis servem apenas para valores de dados.
    No Python, em relação as outras linguagens de programação, não tem comandos para declarar uma variável, pois a mesma é declarada no momnento que atrinuimos um valor a ela.
    Por exemplo, para armazenar um valor é só fazer o seguinte, usamos apenas letras e números para dá nome a uma variável, mas vale lembrar que o número nunca vem em primeiro lugar no nome de uma variavel. Logo após usamos o sinal de igualdade para indicar que um valor será quaradado ali, depois disso dizemos qual valor será guardado.
    Ex.:
        valor_01 = 1
    Dessa forma a sua interpretação quer dizer que "valor_01" irá receber o número 1. Nunca diga que isso é uma comparação.
    As variáveis também podem armazenar valores do tipo string, array e objetos, por exemplo:
        nome = "Ana" ou nome = 'Ana'
    Vale lembrar que o Python difere as variáveis de minusculas e muiscula, por exemplo: altura, Alturta e ALTURA são variaveis diferetes uma das outras, mesmo que leve o mesmo valor, elas são diferentes.

    Podemos atribuir varios valores a várias variaveis subsequentes em uma mesma linha, por exemplo:
"""
h, j, i = 1, 3, 5
print(h)
print(j)
print(i)

""" 
    Como vimos ele atribuiu respequitivamente os valores.
    Também podemos atribuir a varias variáveis o mesmo valor, por exemplo:
"""
w = 'Ana'
a = b = c = "Python"
print(a)
print(b)
print(c)

""" 
    Podemos fazer união de duas variáveis já definidas e colocar em outra, usando operador logico "+"
    Ex.:
"""
h = w+a
print(h)

""" 
    Uma observação é que toda vez que utilizaos a mesma variáel ele armazena apenas o valor da última atribuição.
    Agora para fazer uma soma, basta fazer a mesma coisa do exemplo anterior, mas usando números int, float e complex.
    Ex.:
"""
h = j+i
print(h)

""" 
    Assim ele fará a soma e nos retornará um valor somado.
    
    Outra observação é que não se pode concatenar uma string com um int, float e complex e assim por diante. Caso queira juntar elas o python lhe gerará um erro.
"""