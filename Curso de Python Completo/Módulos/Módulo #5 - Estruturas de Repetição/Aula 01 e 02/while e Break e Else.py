""" 
    Estrutura de repetição - Loops
    
    While => compara se uma condição é verdadeira para pode execultar o código
    For
    Do While*
    
    Comando BREAK => Serve para finalizar um trecho de código caso uma condição seja verdadeira
    Comando ELSE com o while => usado como o else do if, ele eseculta um trecho de código determinado caso a condição do WHILE não seja mais verdadeira

"""

a = 0

while a <= 5:
    print(a <= 5)
    print(a)
    a = a + 1
else:    
    print(a <= 5)
    print('Resultado final: ', a)