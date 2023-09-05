// mommi
import java.util.Scanner;

public class sonatootlus {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        System.out.println("Sisesta lause: ");
        String sona = scan.nextLine();
        System.out.println(sona.toUpperCase());
        System.out.println(sona.length());
        String[] sonad = sona.split(" ");
        System.out.println(sonad.length);
        System.out.printf("Esimene sona oli '%s'", sonad[0]);
        
    }
}
