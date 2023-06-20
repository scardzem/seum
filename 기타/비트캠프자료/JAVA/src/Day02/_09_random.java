package Day02;

public class _09_random {

	public static void main(String[] args) {
		
		//(word)난수 발생 부분
	//Math.random()으로 난수를 발생 시키면 0<=난수<1의 실수가 발생된다
		//1. 0~100 사이의 난수 발생
		//0.0 * 101 <= num1 < 1.0 * 101
		//0 <= num1 < 101
		int num1 = (int)(Math.random() * 101); //난수 발생은 소수점 나오기 때문에 int로 형변환 해야함
		System.out.println("발생된 난수 : " + num1);
		System.out.println("-------------------");
		
	//2. 기본 난수 발생
		// 0.0 <= num2 < 1.0의 실수로 발생됨
		double num2 = (double)Math.random();
		System.out.println("발생된 난수 : " + num2);
		System.out.println("-------------------");
		
	//3. 1~45까지의 난수 발생
		//0.0 * 45 +1 <= num3 < 1.0 * 45 + 1
		//  1 <= num3 < 46
		int num3 = (int)(Math.random() * 45) + 1; 	
		System.out.println("발생된 난수 : " + num3);
		System.out.println("-------------------");
	}

}
