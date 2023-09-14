public class Koer {
    // 
    public String nimi;
    public int vanus;
    public String varv;

    public void Koer(String x, int y, String z) {
        this.nimi = x;
        this.vanus = y;
        this.varv = z;
    }

    public void Tutvustus() {
        System.out.println("Tere, minu nimi on " + this.nimi + ", ma olen " + this.vanus + " aastat vana ja minu karv on " + this.varv + ".");
    }
}
