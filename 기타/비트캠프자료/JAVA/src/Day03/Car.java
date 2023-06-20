package Day03;

public class Car {

//1.인스턴스 멤버 
	String company;
//2.정적 멤버
	//(추가설명)'메모리 관련'
	//static 멤버는 heap 메모리에 적재
	//heap 메모리는 일반 메모리보다 용량이 적기 때문에
	//과도한 static 멤버의 사용은 프로그램의 과부화를 야기
	static String color = "레드";
	
	//final 필드 선언
	//선언과 동시에 초기화 필수
	// 프로그램이 실행되면서 값 변경 불가능
	final int price = 30000000;
	
	public Car() {
		company = "현대";
	}
	
	//인스턴스 멤버(메소드)
	void companyInfo() {

		System.out.println("제조사는 : "+company);
	}
	
	//정적 멤버(메소드)
	static void colorInfo() {
		System.out.println(color);
	}
	

	
	
	
}
