package Day03;

					// (extends Tv�� �Ἥ) LgTvŬ�����̸鼭 TvŬ������ ���µ� ����
public class LgTv_07_ extends Tv_07_{
		String voiceCall;
		//TvŬ������ ��� �޾� �Ʒ��� �ʵ� ����
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
		System.out.println("������ �մϴ�.");
	}
	
	void powerOff() {
		System.out.println("������ ���ϴ�");
	}
	*/
	void turnVoiceCall() {
		System.out.println("��ο� ����");
	}
	
}
