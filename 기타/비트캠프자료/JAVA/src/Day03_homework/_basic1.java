package Day03_homework;

public class _basic1 {

	public static void main(String[] args) {

		PhoneInfo phoneInfo = new PhoneInfo("장성훈","010-0000-0000","890729");
		
		System.out.println("핸드폰 주인 이름 : "+phoneInfo.name);
		System.out.println("핸드폰 번호 : "+phoneInfo.phoneNumber);
		//System.out.println("핸드폰 생년월일 : "+phoneInfo.birthday);
		
		phoneInfo.phone1();
		phoneInfo.phone2();

	}

}
