import java.util.InputMismatchException;
import java.util.Scanner;
import java.util.Random;

public class Problem_independent {
    public static void main(String[] args){
 
        Scanner scan = new Scanner(System.in);
        System.out.println("Millist programmi soovid? (1-3)");
        System.out.println("1. Liitmistehe");
        System.out.println("2. Random int");
        System.out.println("3. Valjasta read");
        System.out.println("4. Eesti lipp");
        int valik = scan.nextInt();

        switch(valik){
            case 1:
                uno();
                break;
            case 2:
                dos();
                break;
            case 3:
                tres();
                break;
            case 4:
                quatro();
                break;
            default:
                System.out.println("Vale valik");
                break;
        }
        
    }

    // liitmistehe
    public static void uno(){
        // vars
        int a = 0;
        int b = 0;
        Scanner scan = new Scanner(System.in);
        // ask for input
        System.out.println("Sisesta esimene arv: ");
        while(true){
            try{
                // ask for int
                a = scan.nextInt();
                break;
            } catch (InputMismatchException e) {
                // if input is string, ask again until int
                System.out.println("Sisesta arv, mitte täht: ");
                scan.nextLine();
            }
        }
        // ask for second input
        System.out.println("Sisesta teine arv: ");
        while(true){
            try{
                // same as last time
                b = scan.nextInt();
                // closing scanner incase memory leak :))))))))))))))
                scan.close();
                break;
            } catch (InputMismatchException e) {
                System.out.println("Sisesta arv, mitte täht: ");
                scan.nextLine();
                
            }
        }
        int c = a + b;
        System.out.println(c);
    } 

    // rand int
    public static void dos(){
        // create random
        Random ran = new Random();
        // get random int
        int a = ran.nextInt(6) + 1;
        // print random int
        System.out.println("Randint: " + a);
    }

    public static void tres(){
        System.out.println("\"Jutumärgid!\"");
        System.out.println("Kaldu \\//");
        System.out.println("Kas \'\"kirjutad\' \"\\\" samamoodi?");
    }

    public static void quatro(){
        for (int i = 0; i < 4; i++){
            System.out.println("\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4\u00A4");
        }
        for (int i = 0; i < 4; i++){
            System.out.println("==============================================");
        }
        for (int i = 0; i < 4; i++){
            System.out.println("----------------------------------------------");
            
        }

    }

   
    
}
