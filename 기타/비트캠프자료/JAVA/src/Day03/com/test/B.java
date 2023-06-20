package Day03.com.test;
//public 접근 제한자
public class B {

	//1. public 접근 제한자로 선언된 생성자 메소드는 어느 클래스에서나 접근 가능
	A a1 = new A();
	
	//2. default 접근 제한자로 선언된 생성자 메소드는
	//	 같은 패키지 내의 클래스에서만 접근 가능
	A a2 = new A(1);
	
	//3. private 접근 제한자로 선언된 생성자 메소드는
	// 	 어떤 클래스에서도 접근 불가능
	//A a3 = new A("str");
	

	
	public B() {
		//4. default 접근 제한자로 선언된 필드와 메소드의 접근은
		//	 같은 패키지 내의 클래스에서만 가능
		int n = a1.num1; //num1은 A클래스에서 만든거
		a1.method1();	//method1();는 A클래스에서 만든거
		
		//5.public 접근 제한자로 선언된 필드와 메소드는
		// 어느 클래스에서나 접근 가능
		int m = a1.num2;
		a1.method2();
		
		//6. private 접근 제한자로 선언된 필드와 메소드는
		//	 어떤 클래스에서도 접근 불가능
		//int k = a1.num3;
		//a1.method3();
		
		

	}
	
}
