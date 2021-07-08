# include <stdio.h>
# include <stdlib.h>

int main(){
	
	//Pedra Papel Tesoura
	
		char player1[256], player2[256];
		
		printf("Player 1, Sua Vez...");
		scanf("%s", &player1);
		
		printf("\nPlayer 2, Sua vez...");
		scanf("%s", &player2);
	
		printf("\nAguarde, estamos calculando o resultado...\n");
		
		if(strcmp(player1, "papel") == 0){
			if(strcmp(player2, "papel") == 0){
				printf("\nHouve um empate, pois os dois players jogaram papel...\n");
			}else if(strcmp(player2, "tesoura") == 0){
				printf("\nPlayer 2 ganhou, pois tesoura vence da papel...\n");
			}else if(strcmp(player2, "pedra") == 0){
				printf("\nPlayer 1 ganhou, pois papel vence da pedra...\n");
			}else{
				printf("\nO player 2 jogou uma informacao invalidada!\n");
			}
		}else if(strcmp(player1, "tesoura") == 0){
			if(strcmp(player2, "papel") == 0){
				printf("\nPlayer 1 ganhou, pois tesoura vence do papel...\n");
			}else if(strcmp(player2, "tesoura") == 0){
				printf("\nHouve um empate, pois os dois players jogaram tesoura...\n");
			}else if(strcmp(player2, "pedra") == 0){
				printf("\nPlayer 2 ganhou, pois pedra vence da tesoura...\n");
			}else{
				printf("\nO player 2 jogou uma informacao invalidada!\n");
			}
		}else if(strcmp(player1, "pedra") == 0){
			if(strcmp(player2, "papel") == 0){
				printf("\nPlayer 2 ganhou, pois papel vence da pedra...\n");
			}else if(strcmp(player2, "tesoura") == 0){
				printf("\nPlayer 1 ganhou, pois pedra vence da tesoura...\n");
			}else if(strcmp(player2, "pedra") == 0){
				printf("\nHouve um empate, pois os dois players jogaram pedra...\n");
			}else{
				printf("\nO player 2 jogou uma informacao invalidada!\n");
			}
		}else{
			printf("\player 1 jogou uma informacao invalidada!\n");
		}
		
	return 0;
}
