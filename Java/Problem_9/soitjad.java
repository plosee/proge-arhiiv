package Problem_9;

public class soitjad {
    // omadused
    public String nimi;
    public int pikkus;
    public double parim_aeg;
    // konstruktor
    public void soitjad(String x, int y, double z) {
        this.nimi = "jyri";
        this.pikkus = 180;
        this.parim_aeg = 3.5;
    }
    // meetodid
    public void Tutvustus() {
        System.out.println("Tere, minu nimi on " + this.nimi + ", ma olen " + this.pikkus + " cm pikk ja minu parim aeg 1km peal on " + this.parim_aeg + ".");
    }
}
