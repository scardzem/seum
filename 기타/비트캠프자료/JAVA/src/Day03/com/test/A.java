package Day03.com.test;

//default 접근 제한자
public class A {
	//생성자를 통한 접근 제한자 테스트
	
//1. public 접근 제한자
	public A() {
		
	}

//2. default 접근 제한자
	A(int a) {
		
	}
	
//3. private 접근 제한자
	private A(String str) {
		
	}
	
//필드와 메소드를 통한 접근 제한자 테스트
	
	//(변수)
	//default 접근 제한자
	int num1 = 1;
	//public 접근 제한자
	public int num2 = 10;
	//private 접근 제한자
	private int num3 = 20;
	
	//(메소드)
	//default 접근 제한자
	void method1() {}
	//public 접근 제한자
	public void method2() {}
	//private 접근 제한자
	private void method3() {}
	
	
	
}
