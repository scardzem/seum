package Day03_homework;

public class _basic1 {

	public static void main(String[] args) {

		PhoneInfo phoneInfo = new PhoneInfo("�强��","010-0000-0000","890729");
		
		System.out.println("�ڵ��� ���� �̸� : "+phoneInfo.name);
		System.out.println("�ڵ��� ��ȣ : "+phoneInfo.phoneNumber);
		//System.out.println("�ڵ��� ������� : "+phoneInfo.birthday);
		
		phoneInfo.phone1();
		phoneInfo.phone2();

	}

}
