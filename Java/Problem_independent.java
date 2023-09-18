// program mommi
// iseseisev

import java.util.Scanner;
import java.util.Random;
import java.util.ArrayList;

public class Problem_independent {
    public static void main(String[] args){
        // kysime kasutaja valikut
        Scanner scan = new Scanner(System.in);
        System.out.println("Millist programmi soovid? (1-5)");
        System.out.println("1. Random int");
        System.out.println("2. auto litsents");
        System.out.println("3. keskmine ja summa");
        System.out.println("4. arv kymnendsysteemi");
        System.out.println("5. minutid tundideks");
        int valik = scan.nextInt();
        scan.close();
        // switch case et naha mis valik tehti
        switch(valik){
            case 1:
                suvalisednumbrid();
                break;
            case 2:
                autolitsentsgenereerija();
                break;
            case 3:
                summajakeskmine();
                break;
            case 4:
                binaarjatetsimaal();;
                break;
            case 5:
                tunnidjaminutid();
                break;
            default:
                System.out.println("Vale valik");
                break;
        }
    }

    // 10
    public static void suvalisednumbrid(){
        // varid asjade jaoks
        Random ran = new Random();
        String stringid = "";

        // for loop 5 korda ning lisa stringi numbrid
        for (int i = 0; i < 5; i++){
            int randomint = ran.nextInt(66);
            stringid += randomint;
        }

        System.out.println(stringid);
    }

    // 14
    public static void autolitsentsgenereerija(){
        // VARID
        Random ran = new Random();
        int min = 99;
        int max = 1000;
        // randrange kalkulatsioon
        int randomnumber = ran.nextInt(max-min+1) + min;
        // suvalise 3 tahte genereerimine
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
    public static void summajakeskmine(){
        // varid
        ArrayList<Integer> list = new ArrayList<Integer>();
        double summa = 0;
        double keskmine = 0;
        // paneme listi numbreid
        list.add(3); list.add(5); list.add(3); list.add(12); list.add(5);
        // summa arvutus
        for (int i = 0; i < list.size(); i++){
            summa += list.get(i);
        }
        // keskmise arvutus
        keskmine = summa / list.size();
        // vastuste valjasstamine
        System.out.println("Summa: " + summa);
        System.out.println("Keskmine: " + keskmine);
    }

    // 19
    public static void binaarjatetsimaal(){
        // armas decimal
        int decimal = 56;
        // printime asju
        System.out.println("Decimal: " + decimal);
        System.out.print("Binary: " + Integer.toBinaryString(decimal));

    }

    // 21
    public static void tunnidjaminutid(){
        int minute = 669;
        // mitu minutit on siis
        int tund = minute / 60;
        int minutes = minute % 60;
        // printime
        System.out.printf("%d:%02d", tund, minutes);

    }
}

   

