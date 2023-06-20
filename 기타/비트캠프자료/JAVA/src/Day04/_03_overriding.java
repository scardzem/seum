package Day04;

public class _03_overriding {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Calculator cal = new Calculator();
		//부모클래스(Calculator)의 메소드 사용
		int result1 = cal.calculate(10,20);
		System.out.println("부모클래스 메소드 사용 결과 : " + result1);
		System.out.println("----------------------");
		
		CalMinus calMinus = new CalMinus();
		//오버라이딩 된 자식 클래스(CalMinus)의 메소드 사용
		int result2 = calMinus.calculate(10, 20);
		System.out.println("오버라이딩 된 자식 클래스 메소드 사용 결과 : " + result2);
		System.out.println("----------------------");		
	}

}
