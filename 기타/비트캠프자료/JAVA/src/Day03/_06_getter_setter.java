package Day03;

public class _06_getter_setter {

	public static void main(String[] args) {
		
		userInfo_06_ userinfo = new userInfo_06_();
		
		//private�� ����� �ʵ忡 ���� ���� �Ұ�
		//userinfo.userName = "ȫ�浿";
		
		//private�� ����� �ʵ��� ���� �ٲ� ���� setter �޼ҵ带 ���
		userinfo.setUserName("ȫ�浿");
		userinfo.setPhoneNum("010-0000-0000");
		userinfo.setUserAge(20);
		
		//private�� ����� �ʵ� ���� ����� getter �޼ҵ� ���		
		//System.out.println("������� �̸��� : " + userinfo.userName()); //get���� �����Ϸ��� �ϸ� ������
		System.out.println("������� �̸��� : " + userinfo.getUserName());
		System.out.println("������� ����ó�� : " + userinfo.getPhoneNum());
		System.out.println("������� ���̴� : " + userinfo.getUserAge());
		
		
		
	}

}
