// Programmer: mommi
// Ülesanne 6

import java.util.ArrayList;
import java.util.Scanner;
import java.io.*;

public class Problem_6 {
    public static void main(String[] args){
        // lisa return array arvude methodist vari
        ArrayList<Integer> arvud = lisaarv();
        // arvuta array keskmine ja summa
        arvutamine(arvud);

    }

    public static ArrayList<Integer> lisaarv(){
        // tee arraylist
        ArrayList<Integer> arvud = new ArrayList<Integer>();
        // ask for input
        Scanner scan = new Scanner(System.in);
        System.out.println("Sisesta arv: ");
        int arv = scan.nextInt();
        // add input to arraylist
        arvud.add(arv);

        // loop for input
        while(true) {
            try {  
                System.out.println("Sisesta arv: ");
                arv = scan.nextInt();
                arvud.add(arv);
            } catch (Exception e) {
                // if input is not int, close scanner and return array
                System.out.println("Sulgen programmi");
                scan.close();
                return arvud;
            }
        }
    }   

    public static void arvutamine(ArrayList<Integer> arvud){
        // vars
        int suurus;
        int summa = 0;
        double keskmine;
        suurus = arvud.size(); // array suurus
        // parse through array and add to sum
        for (int i = 0; i < arvud.size(); i++) {
            summa += arvud.get(i);
        }
        // calc average
        keskmine = summa / suurus;
        // make file
        File tekstfail = new File("arvud.txt");
        try {
            // write sum, avg and array to file
            PrintWriter pw = new PrintWriter(tekstfail);
            pw.println("Arvude summa: " + summa);
            pw.println("Arvude keskmine: " + keskmine);
            pw.println("Koik arvud: " + arvud);
            pw.close();
        } catch (Exception e) {
            // if error then exit program
            System.out.println("Tekkis viga: " + e.getMessage());
            System.exit(0);
        }
    }
}