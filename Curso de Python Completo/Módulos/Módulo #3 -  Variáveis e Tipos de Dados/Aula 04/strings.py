# Aula 04 - Strings
""" 
    Como vimos nas aulas anteriodes os tipos de dados numericos que são os int's, float's e complex's. Agora veremos os tipos de dados textuais que são as Strings.
    
    Como já visto anteriomente que as Strings pode ser escrita em dentro de aspas duplas (") e simples ('), dessa forma o Python pode entender que o que está entre as aspas duplas ou simples é uma string. Vimos também que podemos guardar as Strings em variáveis para usar posteriomente.

    Existe também a possibilidade de usar texto em bloco, ou seja, comquebra de linha, para isso, basta em colocar a string dentro de três aspas duplas e fechar com elas também.
    Ex.:
"""
a = """ Esse é um testo em bloco que eu posso imprimir
    Agora veremos o resultado com a quebra de linha
"""
# print(a)


""" 
    O bom dessa três aspas duplas é que ela pode ser usada como uma string em bloco, guardando em uma variável ou imprimindo direto, ou podemos usar como comentarios mas sem imprimir ou guardar em uma variável, assim como estamos fazendo agora.
    
    - Métodos das Strings
    
    Eu posso imprimir uma string com espeço no começo e no final da string, mas se eu usar a função strip() ele ignora esses espaços iniciais e finais.
    Ex.:
"""
b = " Olá Mundo "
# print(b)
# print(b.strip())
""" 
    Outro método é que eu posso imprimir a string tudo em minusculo, basta eu usar a função lower()
    Ex.:
"""
c = "Olá Mundo"
# print(c)
# print(c.lower())
""" 
    Também podemos deixar tudo maiusculo usando a função upper()
"""
d = "Olá Mundo"
# print(d)
# print(d.upper())
""" 
    Vale lembrar que para usar essas funções (métodos) basta colocar um ponto após chamar a variável depois coloque a função desejada.
    
    Já vimos anteriomente, mas podemos concatenar duas strings utilizando o mais(+) para poder imprimir como se fosse apenas uma.
    Ex.:
"""
e = 'Olá'
f = 'Mundo'
g = e+f
# print(g)
""" 
    E nesse meio eu posso concatenar variáveis que seceberam strings direto com outras strings.
    Ex.:
"""
h = e + ' ' + f
print(h)