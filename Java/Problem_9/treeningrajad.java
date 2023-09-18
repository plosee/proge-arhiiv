package Problem_9;

public class treeningrajad {
    // omadused
    public String nimi;
    public int pikkus;
    public double parim_aeg;
    // konstruktor
    public treeningrajad(String x, int y, double z) {
        this.nimi = x;
        this.pikkus = y;
        this.parim_aeg = z;
    }
    // meetodid
    public void info() {
        System.out.println("Taja nimi on " + this.nimi + ", selle pikkus on " + this.pikkus + " km pikk ja selle raja kiireim aeg on " + this.parim_aeg + ".");
    }
}
