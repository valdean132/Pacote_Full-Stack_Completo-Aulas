#include <stdio.h>
#include <stdlib.h>


int main(void){
	
	char nome[256];
	char sobrenome[256];
	int respFim;
	int ano_nascimento;
	int idade;
	
	printf("Qual seu nome?\n");
	scanf("%s", nome);
	
	printf("\nShow de Bola, %s... Qual Sua Idade?\n", nome);
	scanf("%d", &idade);
	
	printf("\nMuito Bem, bom saber que voce tem %d anos. Mas me diga, em que ano voce nasceu?\n", idade);
	scanf("%d", &ano_nascimento);
	
	printf("\nQue Bom, E seu Sobrenome qual eh?\n");
	scanf("%s", sobrenome);
	
	printf("\nEntao quer dizer que seu nome completo eh %s %s e voce nasceu em %d tento assim %d anos. Isso mesmo?\n", nome, sobrenome, ano_nascimento, idade);
	scanf("%d", &respFim);
	
	if(respFim == 1){
		printf("\nQue Legal, foi bom te conhecer...");
	}else{
		printf("\nAinda nao programei essa parte!!!");
	}
	
	return 0;
}
