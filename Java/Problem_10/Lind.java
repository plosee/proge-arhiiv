package Problem_10;

public class Lind extends Loom{
    // omadus
	private int jalaarv;
	// kontstruktor
	public Lind(int jalaarv) {
		this.jalaarv = jalaarv;
	}
	// getter
	public int getjalaarv() {
		return jalaarv;
	}
	// setter
	public void setjalaarv(int jalaarv) {
		this.jalaarv = jalaarv;
	}
	// meetod
	public void lenda(){
		System.out.println("flap flap");
	}
    @Override
    public void toit(){
        System.out.println("Lind sööb putukaid");
    }
}
