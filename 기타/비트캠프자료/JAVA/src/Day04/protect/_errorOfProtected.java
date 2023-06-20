package Day04.protect;

import Day04.Tv;

public class _errorOfProtected {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Tv tv = new Tv();
		
		//protected 선언된 필드나 메소드는 다른 패키지의
		//클래스에서는 사용 불가능 (아래 두 줄은 에러 뜨는거 보려고 쓴거임)
		//tv.company = "LG";
		//tv.showCompany();

	}

}
