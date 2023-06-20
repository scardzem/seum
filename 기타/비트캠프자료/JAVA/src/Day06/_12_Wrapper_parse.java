package Day06;

public class _12_Wrapper_parse {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		//String형 "100"을 int형 100으로 치환
		int num1 = Integer.parseInt("100");
		//String형 "3.14"를 double형 3.14로 치환
		double num2 = Double.parseDouble("3.14");
		//String형 "true"를 boolean형 true로 치환
		boolean chk = Boolean.parseBoolean("true");
		
		System.out.println(num1);
		System.out.println(num2);
		System.out.println(chk);
	}

}
