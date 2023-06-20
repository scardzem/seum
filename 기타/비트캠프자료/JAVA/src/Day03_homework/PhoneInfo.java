package Day03_homework;

public class PhoneInfo {

	
	String name;
	String phoneNumber;
	String birthDay;
	
	PhoneInfo(String n, String p, String b) {
		name=n;
		phoneNumber=p;
		birthDay=b;
	}
	
	PhoneInfo(String n, String p){
		name=n;
		phoneNumber=p;
	}
	
	void phone1() {
		System.out.println(name);
		System.out.println(phoneNumber);
		}
	
	void phone2() {
		System.out.println(name);
		System.out.println(phoneNumber);
		System.out.println(birthDay);
	}
	
}
