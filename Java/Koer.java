public class Koer {
    // var
    public String nimi;
    public int vanus;
    public String varv;
    // konstruktor
    public Koer(String x, int y, String z) {
        this.nimi = x;
        this.vanus = y;
        this.varv = z;
    }
    // meetod
    public void Tutvustus() {
        System.out.println("Tere, minu nimi on " + this.nimi + ", ma olen " + this.vanus + " aastat vana ja minu karv on " + this.varv + ".");
    }
}
