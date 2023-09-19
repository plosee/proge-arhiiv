
package Problem_9;
import java.time.LocalDate;

public class tsiklid {
    // varid
    public String nimi;
    public int pikkus;
    public LocalDate viimane_soit;
    // konstruktor
    public tsiklid(String x, int y, LocalDate z) {
        this.nimi = x;
        this.pikkus = y;
        this.viimane_soit = LocalDate.now();
    }

    public void motikas() {
        System.out.println("Motikas: " + this.nimi + " pikkusega " + this.pikkus + "cm" + " viimane sõit oli " + this.viimane_soit + ".");

    }
}
