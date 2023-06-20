package Day06_homework_after;

public class _24_basic02 {
	public static void printEven(int[] arr) {
		for(int i = 0; i < arr.length; i++) {
			if(arr[i] % 2 == 0)
				System.out.print(arr[i] + "\t");
		}
		System.out.println();
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int[] numArr1 = new int[11];
		int[] numArr2 = new int[101];
		
		for(int i = 0; i < numArr1.length; i++) {
			numArr1[i] = i;
		}
		
		for(int j = 0; j < numArr2.length; j++) {
			numArr2[j] = j + 100;
		}
		
		printEven(numArr1);
		printEven(numArr2);

		
	}

}
