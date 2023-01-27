""" 
    Operadores de Comparação
    
    Nessa aula vamos ver os operadores de comparação, Vamos a lista:
    
        Operador de Igualdade: Esse operador é representado por dois sinais de igualdade (==);
        Operador da Diferença: Representado com o ponto de exclamação seguido da igauldade (!=);
        Operador Maior que: Representado pelo simbolo da seta para direita (>);
        Operador Menor que: Esse é representado pelo simbolo da seta para a esquerda (<);
        Operador Maior que OU igual a: Esse operador só acrescenta a sinal de igualdade ficando dessa forma (>=);
        Operador Menor que OU igual a: Esse operador só acrescenta a sinal de igualdade ficando dessa forma (<=);
        
    O uso dos operadores de comparação vão servir para comparar valores das variáveis criadas. Vale lembrar que todo oerador em Python deve ter espaço antes e depois das variáveis, Vamos aos exemplos:
"""
x = 3
y = 5
z = 3.0
w = 8

print(x == y) # Verificando Primeiro operador
print(x != z) # Verificando Segundo operador (Apesar de um valor ser int e o outro ser float, ele ainda vai dá Falso pois os dois valores são iguais, não identicos mais iguais)
print(x > y) # Verificando Terceiro operador
print(x < y) # Verificando Quarto operador
print(x >= y) # Verificando Quinto operador
print(x <= y) # Verificando Sexto operador