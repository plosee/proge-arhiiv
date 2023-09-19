package Problem_10;

public class Roomaja extends Loom {
    // omadus
	private boolean elav;
	// kontstruktor
	public Roomaja(boolean elav) {
		this.elav = elav;
	}
	// getter
	public boolean getelav() {
		return elav;
	}
	// setter
	public void setelav(boolean elav) {
		this.elav = elav;
	}
	// meetod
	public void mismaolen(){
		System.out.println("ma olen roomaja");
	}
}

