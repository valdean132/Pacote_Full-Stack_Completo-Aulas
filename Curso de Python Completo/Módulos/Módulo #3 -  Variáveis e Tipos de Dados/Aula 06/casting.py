"""
    A função CASTING converte tipos de dados para outros tipos de dados. OU seja, com ele eu consigo fazer a converção de int, float e string.
    
    Vamos Ver um exemplo:
    
    Com relação ao INT:    
"""
x = 2
y = 2.8
z = '2'
""" 
    Declarada as variaveis a cima, vamos forçar sua converção para o INT usando o CASTING, para isso é só chamar a função int e colocar a variavel dentro do ();
    
"""
x = int(x)
y = int(y)
z = int(z)

""" Imprimindo tudo na mesma linha """

print(x, y, z)

"""
    Como vimos na reposta final todos foram convertido para int

    Com relação ao FLOAT:

    Só seguir o mesmo exemplo do int, dessa vez trocando para FLOAT   
"""
a = float(2.3)
b = float(2)
c = float('2.3')
d = float('2')

""" Imprimindo tudo na mesma linha """

print(a, b, c, d)

"""
    E na saida foi impresso dizendo que todos os valores estão com pelo menos uma casa decimal.
   
    Agora com as STRINGS:
"""
t = 's1'
r = 2
u = 2.3

""" Imprimindo tudo na mesma linha """

"""
    Antes de tudo vamos verificar qual seu tipo de dado
"""
print("A variavel t eh do tipo: ", type(t))
print("A variavel r eh do tipo: ", type(r))
print("A variavel u eh do tipo: ", type(u))

""" Agora que vimos qual seu tipo de variavel, formçamos a coverção para string """

t = str('s1')
r = str(2)
u = str(2.3)

""" Se imprimirmos de novo agora ele dira que todos são do tio string """

print("A variavel t eh do tipo: ", type(t))
print("A variavel r eh do tipo: ", type(r))
print("A variavel u eh do tipo: ", type(u))

print(t, r, u)
