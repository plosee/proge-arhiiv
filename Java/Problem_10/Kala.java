package Problem_10;

public class Kala extends Loom{
    // omadus
	private String liik;
	// kontstruktor
	public Kala(String liik) {
		this.liik = liik;
	}
	// getter
	public String getliik() {
		return liik;
	}
	// setter
	public void setliik(String liik) {
		this.liik = liik;
	}
	// meetod
	public void uju(){
		System.out.println("mull mull");
	}
}
