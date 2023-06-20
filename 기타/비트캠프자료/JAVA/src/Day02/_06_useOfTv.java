package Day02;

public class _06_useOfTv {

	public static void main(String[] args) {
	//1. 객체의 생성과 초기화
		//앞의 Tv는 클래스 뒤의 tv는 변수(Tv라고 메인메소드 없이 만든 클래스)
		//Tv, Speaker 클래스가 연동?돼있다.
		Tv tv = new Tv("Apple", 5000000);
		
		//생성된 객체의 속성이나 메소드에 접근할 때는
		//생성된 객체 명에 .을 붙여서 접근할 수 있음.
	//2. 객체 속성 값 사용
		System.out.println("TV의 제조사는" + tv.company + "입니다.");
		System.out.println("TV의 가격은" + tv.price + "입니다.");
		
	//3. 객체 메소드(동작) 실행
		tv.turnOn(1);
		tv.changeChannel();
		//tv.changeVolumn();
		tv.volumnUp();
		tv.volumnDown();
		tv.turnOff();

	}

}
