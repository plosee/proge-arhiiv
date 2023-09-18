// program mommi
// iseseisev

import java.util.Scanner;
import java.util.Random;
import java.util.ArrayList;

public class Problem_independent {
    public static void main(String[] args){
 
        Scanner scan = new Scanner(System.in);
        System.out.println("Millist programmi soovid? (1-3)");
        System.out.println("1. Random int");
        System.out.println("2. auto litsents");
        System.out.println("3. keskmine ja summa");
        System.out.println("4. arv kymnendsysteemi");
        System.out.println("5. minutid tundideks");
        int valik = scan.nextInt();
        scan.close();

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
            case 5:
                cinco();
                break;
            default:
                System.out.println("Vale valik");
                break;
        }
    }

    // 10
    public static void uno(){
        // varid asjade jaoks
        Random ran = new Random();
        String s = "";

        // for loop 5 korda ning lisa stringi numbrid
        for (int i = 0; i < 5; i++){
            int a = ran.nextInt(66);
            s += a;
        }

        System.out.println(s);
    }

    // 14
    public static void dos(){
        // VARID
        Random ran = new Random();
        int min = 99;
        int max = 1000;
        // randrange calculation
        int randomnumber = ran.nextInt(max-min) + min;
        // random 3 tahte genereerimine
        String tahte = "";
        for (int i = 0; i < 3; i++){
            char c = (char)(ran.nextInt(26) + 'a');
            tahte += c;
        }
        // litsentsi genereerimine
        String litsents = randomnumber + tahte.toUpperCase();
        System.out.println(litsents);
    }

    // 16
    public static void tres(){
        // varid
        ArrayList<Integer> list = new ArrayList<Integer>();
        double summa = 0;
        double keskmine = 0;
        // paneme listi numbreid
        list.add(3);
        list.add(5);
        list.add(3);
        list.add(12);
        list.add(5);
        // summa arvutus
        for (int i = 0; i < list.size(); i++){
            summa += list.get(i);
        }
        // keskmise arvutus
        keskmine = summa / list.size();
        // vastuste rassistlik valjastamine
        System.out.println("Summa: " + summa);
        System.out.println("Keskmine: " + keskmine);
    }

    // 19
    public static void quatro(){
        // armas decimal
        int decimal = 56;
        // printime bsi
        System.out.println("Decimal: " + decimal);
        System.out.print("Binary: " + Integer.toBinaryString(decimal));

    }

    // 21
    public static void cinco(){
        int minute = 85;
        // mitu minutit on siis
        int tund = minute / 60;
        int minutes = minute % 60;
        // paneme selle info stringiks
        String full = tund + ":" + minutes;
        // printime
        System.out.println(full);

    }
}

   

