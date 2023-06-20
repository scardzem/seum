package Day06;

public class _10_valueOf {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		//int형 10이 String형 "10"으로 치환
		String str1 = String.valueOf(10);
		
		//char형 'c'가 String형 "c"fh 치환
		String str2 = String.valueOf('c');
		
		//double형 3.14가 String형 "3.14"로 치환
		String str3 = String.valueOf(3.14);
		
		//boolean형 false가 String형 "false"로 치환
		String str4 = String.valueOf(false);
		
		System.out.println(str1);
		System.out.println(str2);
		System.out.println(str3);
		System.out.println(str4);
	}

}
