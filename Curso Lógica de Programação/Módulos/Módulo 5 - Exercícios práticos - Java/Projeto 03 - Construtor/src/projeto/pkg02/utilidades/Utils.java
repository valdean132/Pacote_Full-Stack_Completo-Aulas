package projeto.pkg02.utilidades;

public class Utils {
    
    /*
        int, double, char, String, float
    */
    
    private int idade = 21;
    public double peso = 70.5;
    public float peso2 = 70.5f;
    public String nome = "Valdean";
    
    public Utils(double peso, String nome){
        this.nome = nome;
        this.peso = peso;
        System.out.println("Esse é o nome: " + this.nome);
        System.out.println("Esse é o peso: " + this.peso);
    }
    
    public void printHelloWord(){
        idade = 30;
        System.out.println("A idade aqui é "+ idade);
        printOutraCoisda();
    }
    
    public int pegaIdade(){
        return idade;
    }
            
    private void printOutraCoisda(){
        System.out.println("Outra coisa!");
    }
    
}