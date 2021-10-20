
package exercicio.pratico.pkg1.java;

import java.util.Scanner;


public class Main {
    
    public int[] numeros = {10, 20, 30};
    
    
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in); 
       
        int pontos = 0;
        System.out.println("Bem vindo!!! Precione 's' para continuar...");
        String string = scanner.nextLine();
       
        if(string.equals("s")){
            System.out.println("Qual a capital do Brasil? ");
            string = scanner.nextLine();
            if(string.equals("Brasilia")){
                pontos++;
                System.out.println("Você pontuou!!!");
                System.out.println("Você deseja continuar? (s) ou desistir? (d)");
                string = scanner.nextLine();
                if(string.equals("s")){
                    System.out.println("Em qual continente fica o Brasil? ");
                    string = scanner.nextLine();
                    if(string.equals("America do Sul")){
                        pontos++;
                        System.out.println("Você pontuou!!!");
                        System.out.println("Você deseja continuar? (s) ou desistir? (d)");
                        string = scanner.nextLine();
                        if(string.equals("s")){
                            System.out.println("Qual o nome da melhor escola de TI do Brasil? ");
                            string = scanner.nextLine();
                            if(string.equals("Danki Code")){
                                pontos++;
                                System.out.println("Você Ganhou!!!");
                                System.out.println("Sua pontuação completa foi de: "+pontos+" pontos");
                            }else{
                                System.out.println("Gamer Over! Sua Pontuação foi de: "+pontos);
                            }
                        }else{
                            System.out.println("Gamer Over! Sua Pontuação foi de: "+pontos);
                        }
                    }else{
                        System.out.println("Gamer Over! Sua Pontuação foi de: "+pontos);
                    }
                }else{
                    System.out.println("Gamer Over! Sua Pontuação foi de: "+pontos);
                }
            }else{
                System.out.println("Gamer Over! Sua Pontuação foi de: "+pontos);
            }
        }else{
            System.out.println("Acabou o jogo... Você pontuou 0.");
        }
    }
    
}
