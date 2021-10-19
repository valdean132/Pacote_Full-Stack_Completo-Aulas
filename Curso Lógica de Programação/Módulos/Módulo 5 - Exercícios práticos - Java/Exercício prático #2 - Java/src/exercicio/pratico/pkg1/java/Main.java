
package exercicio.pratico.pkg1.java;

import java.util.Scanner;


public class Main {
    
    public int[] numeros = {10, 20, 30};
    
    
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double tempoAntigo = System.currentTimeMillis();
        String s = scanner.nextLine();
        
        if(Main.convertTime(System.currentTimeMillis() - tempoAntigo) >= 2){
            if(s.length() >=10){                
                System.out.println(s);
            }else{
                System.out.println("Sua mensagem é muito curta, precisa digitar mais!");
            }
        }else{
            System.out.println("Ops!!! Você precisa esperar mais ou menos 2 seg.");
            System.out.println("Vamos tentar novamente?!");
            
            tempoAntigo = System.currentTimeMillis();
            s = scanner.nextLine();
            if(Main.convertTime(System.currentTimeMillis() - tempoAntigo) >= 2){
                System.out.println("Agora sim!");
            }else{
                System.out.println("Ops!!! Você falhou duas vezes");
                System.out.println("O proigrama está sendo encerrado...");
            }
        }
    }
    
    public static double convertTime(double tempo){
        return tempo/1000;
    }
    
}
