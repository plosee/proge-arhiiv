public class Ruumalad {

    public static double silinderR(String a, String h) {
        float alus = Float.parseFloat(a);
        float korgus = Float.parseFloat(h);
        double s = Math.PI * Math.pow(alus, 2) * korgus;
        return s;
    }

    public static double risttahukasR(String a, String h, String l) {
        float alus = Float.parseFloat(a);
        float korgus = Float.parseFloat(h);
        float laius = Float.parseFloat(l);
        double s = alus * korgus * laius;
        return s;
    }

    public static double koonusR(String a, String h) {
        float alus = Float.parseFloat(a);
        float korgus = Float.parseFloat(h);
        double s = Math.PI * Math.pow(alus, 2) * korgus / 3;
        return s;

    }
}
