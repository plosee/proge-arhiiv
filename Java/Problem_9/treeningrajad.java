package Problem_9;

public class treeningrajad {
    // omadused
    public String nimi;
    public int pikkus;
    public double parim_aeg;
    // konstruktor
    public void treeningrajad(String x, int y, double z) {
        this.nimi = "nurburgring";
        this.pikkus = 3;
        this.parim_aeg = 2.3;
    }
    // meetodid
    public void info() {
        System.out.println("Taja nimi on " + this.nimi + ", selle pikkus on " + this.pikkus + " km pikk ja selle raja kiireim aeg on " + this.parim_aeg + ".");
    }
}
