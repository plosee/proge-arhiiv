// Programmer: mommi
// Ülesanne 7

import java.util.InputMismatchException;
import java.util.Scanner;

public class Problem_7 {
    public static void main(String args[]){
        // func
        mingitehe();
    }

    public static void mingitehe(){
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
        // random math
        int c = a + b;
        System.out.println(c);
    } 
}

