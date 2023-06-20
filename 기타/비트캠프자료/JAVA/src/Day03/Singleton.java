package Day03;

public class Singleton {
	//싱글톤 객체 생성
	//전체 프로그램에서 하나의 객체만 생성 가능
	private static Singleton singleton = new Singleton();
	
	private Singleton() {
		
	}
	
	//클래스에서 생성된 싱글톤 객체를 반환하는 메소드
	//(해석해보면) 정적 메소드이고(static) 반환타입 Singleton 객체인 getInstance() 메소드
	static Singleton getInstance() {
		return singleton;
	}
	
}
