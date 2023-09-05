import java.util.Scanner;

public class tingimuslause {
    public static void main(String[] args){
        arvutaja();

    }
    public static void arvutaja(){
        for (int i = 0; i < 3; i++){
            Scanner scan = new Scanner(System.in);
            System.out.println("Sisesta esimene arv: ");
            double arv1 = scan.nextInt();
            System.out.println("Sisesta teine arv: ");
            double arv2 = scan.nextInt();

            if (arv1 < 0 || arv2 < 0) {
                System.out.println("Arv on negatiivne, ei saa jagada");
                System.exit(0);
                
            } else if (arv1 == 0 && arv2 == 0) {
                System.out.println("Arvu ei saa jagada nulliga");
                System.exit(0);
            }

            System.out.println("Arvude jagatis on: " + arv1/arv2);
        }

    }

}
