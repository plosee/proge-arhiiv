package Problem_10;

public class imetaja extends Loom{
	// omadus
	private String nimi;
	// kontstruktor
	public imetaja(String nimi) {
		this.nimi = nimi;
	}
	// getter
	public String getNimi() {
		return nimi;
	}
	// setter
	public void setNimi(String nimi) {
		this.nimi = nimi;
	}
	// meetod
	public void haugu(){
		System.out.println("Auh auh");
	}
	@Override
	public void temp() {
		System.out.println("koigusoojane");
	}

}