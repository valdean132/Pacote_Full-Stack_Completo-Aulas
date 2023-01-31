"""
    Condicional com IF

    Python - Comandos de controle condicional

    if, else e elif -> (else if)

    Aqui a indentação é importante, pois é ela que dertenminara se um elemento está dentro de um escopo de uma função, condição ou outra coisa...
    
    O if e elif sempre serão execultados caso a condição bata, caso contraio o else funcionara caso as condições não bata, ou seja, em último caso...
    
    Não existe um elif sem um if e nem um else sem um elif ou um if...

"""
x = 3
y = 3

if y > x:
    print("Y é maior do que X")
    print("Código dentro do bloco condicional IF")
elif y < x:
    print("Y é menor do que X")
    print("Código dentro do bloco condicional ELIF")
else:
    print("Y é igual a X")
    print("Código dentro do bloco condicional ELSE")


print(y > x)