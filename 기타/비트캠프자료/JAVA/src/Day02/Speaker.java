package Day02;

public class Speaker {
	//이 클래스를 tv 클래스에서 사용하려면 tv클래스에서 스피커 객체를 생성 해줘야함.(useOfTv
	int volumn = 0;
	
	void volumnUp() {
		volumn++;
		System.out.println("볼륨을 " + volumn + "으로 올립니다.");
	}
	
	void volumnDown() {
		volumn--;
		System.out.println("볼륨을 " + volumn + "으로 줄입니다.");
		

		}
		
	}

