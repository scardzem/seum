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
		System.out.println("�̸� : " + this.name);
		System.out.println("��ȭ��ȣ : " + this.phoneNumber);
		System.out.println("������� : " + this.birthDay);
	}
}
