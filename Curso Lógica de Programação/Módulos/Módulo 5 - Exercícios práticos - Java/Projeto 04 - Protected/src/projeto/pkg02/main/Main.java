package projeto.pkg02.main;

import projeto.pkg02.utilidades.Utils;


public class Main extends Utils{
    
    public Main(double peso, String nome){
        super(peso, nome);
        new Teste();
    }
    
    
    public static void main(String[] args){
//        Utils main = new Main(60.0, "Valdean");;;
//        main.printHelloWord();
//        System.out.println("Nome introduzido no Protected: " + main.nome2);

        new Mian2();
    }
    
}
class Teste{
    public void print(){
        System.out.println("Ok!");
    }
}
