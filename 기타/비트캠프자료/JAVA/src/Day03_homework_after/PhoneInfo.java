package Day03_homework_after;

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
}
