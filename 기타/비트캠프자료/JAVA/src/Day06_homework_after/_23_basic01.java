package Day06_homework_after;

public class _23_basic01 {
	public static int sumArray(int[] arr) {
		int sum = 0;
		
		for(int i = 0; i < arr.length; i++) {
			sum += arr[i];
		}
		
		return sum;
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
		
		System.out.println(sumArray(numArr1));
		System.out.println(sumArray(numArr2));
	}

}
