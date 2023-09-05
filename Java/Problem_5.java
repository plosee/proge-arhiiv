// Programmer: mommi
// Ülesanne 5

import java.util.Scanner;

public class Problem_5 {
    public static void main(String[] args){
        // call func
        arvutaja();
        
    }
    public static void arvutaja(){
        // loop for input
        for (int i = 0; i < 3; i++){
            Scanner scan = new Scanner(System.in);
            System.out.println("Sisesta esimene arv: ");
            double arv1 = scan.nextInt();
            System.out.println("Sisesta teine arv: ");
            double arv2 = scan.nextInt();
            
            // check if numbers are negative or 0
            if (arv1 <= 0 || arv2 <= 0) {
                // if is then fuck you im closing
                System.out.println("Arv, ei saa jagada");
                System.exit(0); 
            }
            // print output
            System.out.println("Arvude jagatis on: " + arv1/arv2);
            scan.close();
        }
    }
}
