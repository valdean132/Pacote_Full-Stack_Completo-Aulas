#include <stdio.h>
#include <stdlib.h>


int main(void){
	
	int hora_cinema = 30;
	int hora_atual = 20;
	
	//Posso entrar no cinema
	
	/*
	if(hora_cinema == hora_atual){
		printf("Posso entrar pq o horario é o mesmo");
	}
	*/
	
	if(hora_atual > hora_cinema + 30){
		printf("Passou do tempo Limite e não pode entrar.");
	}else if(hora_atual < hora_cinema - 30){
		printf("Nem Abril a porta do cinema");
	}else{
		printf("Posso entrar pq o horario é o mesmo");
	}
	
	
	
	return 0;
}
