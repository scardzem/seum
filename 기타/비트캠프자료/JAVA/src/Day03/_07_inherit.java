package Day03;

public class _07_inherit {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//SamsungTv�� TvŬ������ ��ӹ޾Ƽ� TvŬ������ �ʵ�� �޼ҵ带 �����ϴ� ���·� ������
		SamsungTv_07_ samsungTv = new SamsungTv_07_("�Ｚ", 300000, 47, "�򽺺�");
		LgTv_07_ lgTv = new LgTv_07_("LG", 250000, 52, "���� ��ý��Ͻ�");
		
		//��ӹ��� �θ� �ʵ忡 ����
		System.out.println("�� TV�� ������� : "+ samsungTv.company);
		System.out.println("�� TV�� ������� : "+ samsungTv.price);
		System.out.println("�� TV�� ������� : "+ samsungTv.size);
		
		//�ڽ�Ŭ������ ���� �ʵ� ���
		System.out.println("�� TV�� ������� : "+ samsungTv.ai);
		
		//��ӹ��� �θ� Ŭ������ �޼ҵ� ����
		samsungTv.powerOn();
		samsungTv.powerOff();
		
		//�ڽ�Ŭ������ ���� �޼ҵ� ���
		samsungTv.turnOnAi();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}

}
