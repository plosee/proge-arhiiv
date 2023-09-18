package Problem_9;

public class soitjad {
    // omadused
    public String nimi;
    public int pikkus;
    public double parim_aeg;
    // konstruktor
    public soitjad(String x, int y, double z) {
        this.nimi = x;
        this.pikkus = y;
        this.parim_aeg = z;
    }
    // meetodid
    public void Tutvustus() {
        System.out.println("Tere, minu nimi on " + this.nimi + ", ma olen " + this.pikkus + " cm pikk ja minu parim aeg 1km peal on " + this.parim_aeg + ".");
    }
}
