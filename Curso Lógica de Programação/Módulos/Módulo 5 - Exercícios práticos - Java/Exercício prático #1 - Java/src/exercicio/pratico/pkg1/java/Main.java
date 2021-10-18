
package exercicio.pratico.pkg1.java;


public class Main {
    
    public int[] numeros = {10, 20, 30};
    
    public Main(){
        int soma = 0;
        for(int i = 0; i < numeros.length; i++){
            soma+=numeros[i];
            System.out.println(soma);
        }
            System.out.println();
        
        
        
    }
    public static void main(String[] args) {
        new Main();
    }
    
}
