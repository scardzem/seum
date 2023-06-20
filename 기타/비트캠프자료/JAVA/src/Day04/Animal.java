package Day04;

public abstract class Animal {
	
	public String kind;
	
	public void breath() {
		System.out.println("숨을 쉽니다.");
	}
	
	
	//추상메소드 선언 (추상클래스에서는 선언만 하고 정의는 자식클래스에서 한다, 오버라이딩)
	//자식객체마다의 동작이 다를 때
	//자식 객체에서 동작 구현
	public abstract void sound();
	
	

	
	

}
