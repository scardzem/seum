package Day06_homework_after;

public class _28_middle {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ICar[] iCar = new ICar[3];
		
		iCar[0] = new HyundaiCar();
		iCar[1] = new KiaCar();
		iCar[2] = new ToyotaCar();
		
		for(int i = 0; i < iCar.length; i++) {
			iCar[i].startEngine();
			iCar[i].speedUp();
			iCar[i].speedDown();
			iCar[i].hitBreak();
			System.out.println("-------------------------------------");
		}
	}

}
