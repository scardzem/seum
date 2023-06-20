package Day03_homework;

public class Felidae extends Mammal {
	String felidae;
	
	
	//기본 생성자
	//기본 생성자가 없으면 자식 클래스(Lion, Tiger에서 불러올때 아래 Feldae(Stringm, String f){}와 충돌이 나서 에러 뜬다
	//예를 들어 Tiger에서 extends 하면 기본 생성자를 불러오게 만드는거다.
	//new Felidae로 기본생성자 속성을 불러와서 속성들만 불러오는것임.
	Felidae() {
		
	}
	
	Felidae(String m, String f){
		mammal = m;
		felidae = f;
	}

	void fel1() {
		System.out.println(felidae);
	}
	
}
