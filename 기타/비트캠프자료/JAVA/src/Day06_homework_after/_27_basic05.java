package Day06_homework_after;

public class _27_basic05 {
	public static int[] printOdd(int[] arr) {
		int[] returnArr = new int[arr.length / 2 + 1];
		int index = 0;
		
		for(int i = 0; i < arr.length; i++) {
			if(arr[i] % 2 != 0) {
				returnArr[index++] = arr[i];
			}
		}
		
		return returnArr;
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
		
		int[] oddArr1 = printOdd(numArr1);
		int[] oddArr2 = printOdd(numArr2);
		
		for(int i = 0; i < oddArr1.length; i++) {
			System.out.print(oddArr1[i] + "\t");
		}
		
		System.out.println();
		
		for(int i = 0; i < oddArr2.length; i++) {
			System.out.print(oddArr2[i] + "\t");
		}
	}
	
}
