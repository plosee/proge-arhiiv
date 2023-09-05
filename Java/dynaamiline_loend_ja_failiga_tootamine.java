// mommi
import java.util.ArrayList;
import java.util.Scanner;
import java.io.*;

public class dynaamiline_loend_ja_failiga_tootamine {
    public static void main(String[] args){
        ArrayList<Integer> arvud = lisaarv();
        arvutamine(arvud);

    }

    public static ArrayList<Integer> lisaarv(){
        ArrayList<Integer> arvud = new ArrayList<Integer>();
        Scanner scan = new Scanner(System.in);
        System.out.println("Sisesta arv: ");
        int arv = scan.nextInt();
        arvud.add(arv);

        while(true) {
            try {
                System.out.println("Sisesta arv: ");
                arv = scan.nextInt();
                arvud.add(arv);
            } catch (Exception e) {
                System.out.println("Sulgen programmi");
                return arvud;
            }
        }
    }   

    public static void arvutamine(ArrayList<Integer> arvud){
        int suurus;
        int summa = 0;
        double keskmine;
        suurus = arvud.size();
        for (int i = 0; i < arvud.size(); i++) {
            summa += arvud.get(i);
        }
        keskmine = summa / suurus;
        File tekstfail = new File("arvud.txt");
        try {
            PrintWriter pw = new PrintWriter(tekstfail);
            pw.println("Arvude summa: " + summa);
            pw.println("Arvude keskmine: " + keskmine);
            pw.println("Koik arvud: " + arvud);
            pw.close();
        } catch (Exception e) {
            System.out.println("Tekkis viga: " + e.getMessage());
            System.exit(0);
        }
    }
}