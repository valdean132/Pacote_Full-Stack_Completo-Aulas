package projeto.pkg02.main;

import projeto.pkg02.utilidades.Utils;


public class Main extends Utils{
    
    public Main(double peso, String nome){
        super(peso, nome);
        
    }
    
    
    public static void main(String[] args){
        Main main = new Main(60.0, "Valdean");
        main.printHelloWord();
    }
    
}
