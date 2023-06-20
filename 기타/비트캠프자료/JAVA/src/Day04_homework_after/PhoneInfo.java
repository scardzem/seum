package Day04_homework_after;

//Java의 최상위 클래스는 Object
//사용자 정의 클래스 생성 시 항상 Object 클래스를 상속받은 클래스가 생성
//extends Object 키워드가 생략된 상태
//Object 클래스에서 제공하는 메소드를 오버라이딩하여 사용
public class PhoneInfo {
	String name;
	String phoneNumber;
	String birthDay;
	
	PhoneInfo() {
		
	}
	
	PhoneInfo(String name, String phoneNumber) {
		this.name = name;
		this.phoneNumber = phoneNumber;
	}
	
	PhoneInfo(String name, String phoneNumber, String birthDay) {
		this.name = name;
		this.phoneNumber = phoneNumber;
		this.birthDay = birthDay;
	}
	
	public void showPhoneInfo( ) {
		System.out.println("이름 : " + this.name);
		System.out.println("전화번호 : " + this.phoneNumber);
		System.out.println("생년월일 : " + this.birthDay);
	}

	@Override //커서를 이쪽에 두고 메뉴에서 Source - Generate toString()메뉴 클릭하면 이 메소드가 입력됨
	//Object 클래스에서 제공하는 메소드
	public String toString() {
		return "PhoneInfo [name=" + name + ", phoneNumber=" + phoneNumber + ", birthDay=" + birthDay + "]";
	}
	
	
	
	
}
