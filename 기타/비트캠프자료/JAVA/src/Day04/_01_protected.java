package Day04;

public class _01_protected {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		SamsungTv samsungTv = new SamsungTv();
		System.out.println("-----------------------------");
		//protected�μ���� �ʵ峪 �޼ҵ��
		//���� ��Ű�� ���� Ŭ�������� ��� ����
		Tv tv = new Tv();
		tv.company = "������ ����";
		System.out.println(tv.company);
		
	}

}
