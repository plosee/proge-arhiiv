
public class numbrite_maailm {
    // create func
    public static void main(String args[]) {
        // callib koik methodid
        tollid_meetriteks(3);
        ellipsi_pindala(56,79);
        minut_tund(238756);
        double[] list = sportlased(28, 3, 89, 9);
        sportlanevahe(list[0],list[1]);
    }

    public static void tollid_meetriteks(double toll) {
        // arvutab tollid meetriteks
        double meetrid = toll * 0.0254;
        System.out.println("Tollid meetriteks: " + meetrid);
    }

    public static void ellipsi_pindala(double a, double b) {
        // arvutab ellipsi pindala
        double pindala = Math.PI * a * b;
pindala = Math.round(pindala*100)/100;
        System.out.println("Ellipsi pindala: " + pindala);
    }

    public static void minut_tund(double minute) {
        // arvutab minutid tundideks
        double tund = minute / 60;
        double minutes = minute % 60;
        System.out.println("Minutid tundideks: " + tund + " ja minutid: " + minutes + "");
    }

    public static double[] sportlased(int km1, int h1, int km2, int h2) {  
        // arvutab sportlaste kiirused
        double sportlane1 = km1 / h1;
        double sportlane2 = km2 / h2;
        // prindib sportlaste kiirused
        System.out.println("Sportlane 1: " + sportlane1 + " km/h");
        System.out.println("Sportlane 2: " + sportlane2 + " km/h");
        // tagastab sportlaste kiirused
        double[] mewmew = {sportlane1, sportlane2};
        return mewmew;
    }

    public static void sportlanevahe(double sport1, double sport2) {
        // arvutab sportlaste kiiruste vahe
        double vahe = sport1%sport2;
        System.out.println("sportlaste vahe: " + vahe + " km/h");
    }



}