package Day04;

public class _02_overloading {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Calculator cal = new Calculator(); 

		int result1 = cal.calculate(10, 20);
		System.out.println("결과 값은 : " + result1);
		System.out.println("-------------1---------------");
		
		//오버로딩 된 메소드 사용
		int result2 = cal.calculate(10,  20, 30);
		System.out.println("결과 값은 : " + result2);
		System.out.println("-------------2---------------");
		
	}

}
