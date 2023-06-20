package Day04_homework_after;

public class GeneratorThreeNum_advanced_ {
	public int[] generateThreeNum() {
		int[] intArr = new int[3];
		
		while(true) {
			int randomNum1 = (int)(Math.random() * 10);
			int randomNum2 = (int)(Math.random() * 10);
			int randomNum3 = (int)(Math.random() * 10);
			
			if(randomNum1 != randomNum2 && randomNum1 != randomNum3 && randomNum2 != randomNum3) {
				intArr[0] = randomNum1;
				intArr[1] = randomNum2;
				intArr[2] = randomNum3;
				break;
			}
		}
		
		return intArr;
	}
}
