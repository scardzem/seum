package Day04_homework_after;

public class _12_basic01 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		InkjetPrinter inkjetPrinter = new InkjetPrinter();
		RazerjetPrinter razerjetPrinter = new RazerjetPrinter();
		
		inkjetPrinter.powerOn();
		System.out.println("----------------------------------------");
		for(int i = 0; i < 10; i++) {
			inkjetPrinter.print();
			System.out.println("----------------------------------------");
		}
		inkjetPrinter.powerOff();
		System.out.println("----------------------------------------\n");
		
		razerjetPrinter.turnOn();
		System.out.println("----------------------------------------");
		
		for(int j = 0; j < 10; j++) {
			razerjetPrinter.print();
			System.out.println("----------------------------------------");
		}
		razerjetPrinter.turnOff();
	}

}
