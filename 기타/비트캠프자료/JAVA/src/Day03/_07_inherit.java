package Day03;

public class _07_inherit {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//SamsungTv가 Tv클래스를 상속받아서 Tv클래스의 필드와 메소드를 포함하는 형태로 생성됨
		SamsungTv_07_ samsungTv = new SamsungTv_07_("삼성", 300000, 47, "빅스비");
		LgTv_07_ lgTv = new LgTv_07_("LG", 250000, 52, "구글 어시스턴스");
		
		//상속받은 부모 필드에 접근
		System.out.println("이 TV의 제조사는 : "+ samsungTv.company);
		System.out.println("이 TV의 제조사는 : "+ samsungTv.price);
		System.out.println("이 TV의 제조사는 : "+ samsungTv.size);
		
		//자식클래스의 고유 필드 사용
		System.out.println("이 TV의 제조사는 : "+ samsungTv.ai);
		
		//상속받은 부모 클래스의 메소드 접근
		samsungTv.powerOn();
		samsungTv.powerOff();
		
		//자식클래스의 고유 메소드 사용
		samsungTv.turnOnAi();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

}
