// Programmer: mommi
// Ülesanne 4

import java.util.Scanner;

public class Problem_4 {
    public static void main(String[] args){
        // init input
        Scanner scan = new Scanner(System.in);
        // ask for input
        System.out.println("Sisesta lause: ");
        String sona = scan.nextLine();
        // print uppercase, lenght, split, first word
        System.out.println(sona.toUpperCase());
        System.out.println(sona.length());
        // split string into array for easy word access
        String[] sonad = sona.split(" ");
        System.out.println(sonad.length);
        System.out.printf("Esimene sona oli '%s'", sonad[0]);
        scan.close();
        
    }
}
