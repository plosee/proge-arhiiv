package Problem_9;
import java.time.LocalDate;
public class Problem_9 {
    public static void main(String[] args) {
        LocalDate lt = LocalDate.now();

        soitjad s1 = new soitjad("jaan", 180, 1.5);
        tsiklid t1 = new tsiklid("yamaha", 180, lt);
        treeningrajad tr1 = new treeningrajad("tartu", 10, 1.5);

        s1.Tutvustus();
        t1.motikas();
        tr1.info();
    }
}
