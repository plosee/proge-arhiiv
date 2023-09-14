import java.util.Scanner;

public class Problem_8_2 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Koer koer1 = new Koer();
        Koer_tegevus koer2 = new Koer_tegevus();

        System.out.print("Mida sa soovid teha (1-4)\n1. Tutvustus\n2. Istu\n3. Lamama\n4. Seisma\nSisesta valik: ");
        int valik = scanner.nextInt();
        switch(valik){
            case 1:
                System.out.print("Sisesta koera nimi: ");
                String nimi = scanner.next();
                System.out.print("Sisesta koera vanus: ");
                int vanus = scanner.nextInt();
                System.out.print("Sisesta koera karvavärv: ");
                String varv = scanner.next();
                koer1.Koer(nimi, vanus, varv);
                koer1.Tutvustus();
                break;
            case 2:
                koer2.istu();
                break;
            case 3:
                koer2.lamama();
                break;
            case 4:
                koer2.seisma();
                break;
            default:
                System.out.println("Vale valik");
                break;
        }
    }

}
