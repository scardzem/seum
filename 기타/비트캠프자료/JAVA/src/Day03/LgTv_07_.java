package Day03;

					// (extends Tv를 써서) LgTv클래스이면서 Tv클래스의 형태도 포함
public class LgTv_07_ extends Tv_07_{
		String voiceCall;
		//Tv클래스를 상속 받아 아래의 필드 포함
		/*
		  String company;
		  int price;
		  int size
		 */
	LgTv_07_(String com, int pri, int si, String voice){
		this.company = com;
		this.price = pri;
		this.size = si;
		this.voiceCall = voice;
	}
	
	
	/*
	String company;
	int price;
	int size;
	String voiceCall;
	
	void powerOn() {
		System.out.println("전원을 켭니다.");
	}
	
	void powerOff() {
		System.out.println("전원을 끕니다");
	}
	*/
	void turnVoiceCall() {
		System.out.println("헬로우 구글");
	}
	
}
