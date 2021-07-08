# include <stdio.h>
# include <stdlib.h>

int main(){
	
	char nome[256];
	int idade;
	
	printf("Ola! Qual seu nome?\n");
	scanf("%s", &nome);
	
	printf("\nQual sua Idade?\n");
	scanf("%d", &idade);
	
	printf("\nNome: %s\nIdade: %d\n", nome, idade);
	
	printf("\nAguarde em quanto lemos seus dados...\n\n");
	
	printf("A primeira letra do seu nome eh: %c", nome[0]);
	
	if(idade >= 18){
		printf("\n\nVoce eh adulto...");
	}else if(idade >= 12){
		printf("\n\nVoce eh adolescente...");
	}else{
		printf("\n\nVoce eh crianca...");
	}
	
	return 0;
}
