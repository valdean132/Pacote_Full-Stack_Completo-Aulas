#include <stdio.h>
#include <stdlib.h>


int main(void){
	
	int cont = 1;
	int limit = 30;
	/*
	while(cont <= limit){
		
		printf("Aumentando para %d\n", cont);
		
		if(cont == limit){
			int cont2 = limit;
			
			
			while(cont2 > 0){
				
				printf("Reduzindo para %d\n", cont2);
				cont2--;
			}
		}
		
		cont++;
		
	}
	*/
	while(cont <= limit){
		
		int cont2 = 1;
		while(cont2 <= cont){
			if(cont2 < 10){
				printf("0%d ", cont2);
			}else{
				printf("%d ", cont2);
			}
			cont2++;
		}
		printf("\n");
		
		cont++;
	}
	cont = limit;
	while(cont > 1){
		int cont2 = 1;
		while(cont2 < cont){
			if(cont2 < 10){
				printf("0%d ", cont2);
			}else{
				printf("%d ", cont2);
			}
			cont2++;
		}
		printf("\n");
		
		cont--;
	}
		
	return 0;
}
