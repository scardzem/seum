package Day04;

public class Calculator {

	public int calculate(int a, int b) {
		return a + b;
	}
	
	//오버로딩 : 이미 존재하는 이름의 메소드를 매개변수의 개수나 타입에 변화를 주어
	//		   새롭게 만듦(매개변수의 입력에 따라 호출되는 메소드가 선택됨)
	// 			-CalMinus 클래스에서 쓴거 읽어보고 공부
		public int calculate(int a, int b, int c) {
		return a + b + c;
	}
	
	
	
}
