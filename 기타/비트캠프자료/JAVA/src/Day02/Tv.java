package Day02;
//1. 클래스 생성(객체의 설계도 만듦)
public class Tv {
	//객체의 속성 값들
	String company;
	int price = 1000000;
	int size = 47;
	int weight = 2000;
	
	Speaker speaker = new Speaker ();
	
	//(아랫줄 public Tv 부분)기본 생성자 메소드 생략되어 있는 상태로 클래스가 만들어짐
	//생성자 메소드에서 객체 속성값들을 초기화 가능
	public Tv() {
		company = "LG";
		price = 3000000;
		System.out.println("Tv 객체 생성");
	}

	//사용자 정의 생성자 메소드
	//전달 받은 인자 값으로 속성 값을 초기화할 수 있다.
	public Tv(String com, int pri) {
		company = com;
		price = pri;
		System.out.println("사용자 정의 생성자 호출");
	}
	
	
	//객체의 동작들(메소드)
	void turnOn(int a) { //int a를 넣어서 아랫줄로 작동 되게 만듦 (쉬는시간에 어떻게 작동하는지 물어보니까 예시로 써주심)
		System.out.println(a); //여기가 06_useOfTv.java클래스에서 아레쪽에 3.객체 메소드 실행 부분에 첫번째 줄에 1로 입력한 값이..출력되게 만드는... 그런거인듯..
		System.out.println("전원을 켠다.");
	}
	
	void turnOff() {
		System.out.println("전원을 끈다");
	}
	
	void changeChannel() {
		System.out.println("채널을 변경한다");
	}
	
//	void changeVolumn() {
//		System.out.println("볼륨을 조절한다.");
//		}
		void volumnUp() {
			speaker.volumnUp();
		}
		
		void volumnDown() {
			speaker.volumnDown();
	}
	
	
}
