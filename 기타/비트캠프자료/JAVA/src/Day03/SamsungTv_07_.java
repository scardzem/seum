package Day03;
					// (extends Tv를 써서) LgTv클래스이면서 Tv클래스의 형태도 포함
public class SamsungTv_07_ extends Tv_07_{
	String ai;
	
	SamsungTv_07_(String com, int pri, int si, String a) {
		this.company = com; //this()생성자는 Day02에 설명
		this.price = pri;
		this.size = si;
		this.ai =a;
	}
	
	
	
	void turnOnAi() {
		System.out.println("하이 빅스비");
	}
	
	
	//삼성tv와 LgTv에 중복되는 코드(String company, int price, void powerOn(){} 등)들이
	//있어서 중복되는 코드 사용을 지양하고자 부모 코드인 TV를 만들어 사용
	
	
}
