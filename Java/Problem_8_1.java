// Ylesanne 8.1
// Programmer: mommi

import java.util.Scanner;

public class Problem_8_1{

	public static void main(String[] args) {
        String laius = "";
		Scanner scanner = new Scanner (System.in);
		System.out.print("Rööpküliku pindala (1) \nRistküliku pindala (2) \nKolmnurga pindala (3) \nSilindri ruumala (4) \nRisttahuka ruumala (5) \nKoonuse ruumala (6) \nVali tegevus: "); 
		String valik = scanner.next();

        if (valik.equals("5")){
            System.out.print("Sisesta laius: ");
            laius = scanner.next();
        }
		
		System.out.print("Sisesta alus: ");
		String alus = scanner.next();
		System.out.print("Sisesta kõrgus: ");
		String korgus = scanner.next();
        scanner.close();
		
		double s;
		switch (Integer.parseInt(valik)) {
		case 1:
			s = Pindalad.roopkylikS(alus, korgus);
			System.out.printf("Rööpküliku pindala on %.2f ",s);
			break;
		case 2:
			s = Pindalad.ristkylikS(alus, korgus);
			System.out.printf("Ristküliku pindala on %.2f ",s);
			break;
		case 3:
			s = Pindalad.kolmnurkS(alus, korgus);
			System.out.printf("Kolmnurga pindala on %.2f ",s);
			break;
        case 4:
            s = Ruumalad.silinderR(alus, korgus);
            System.out.printf("Silindri ruumala on %.2f ",s);
            break;
        case 5:
            s = Ruumalad.risttahukasR(alus, korgus, laius);
            System.out.printf("Risttahuka ruumala on %.2f ",s);
            break;
        case 6: 
            s = Ruumalad.koonusR(alus, korgus);
            System.out.printf("Koonuse ruumala on %.2f ",s);
            break;

		default:
			System.out.print("Valikust arusaamine ebaõnnestus!");
			break;
		}

	}

}
