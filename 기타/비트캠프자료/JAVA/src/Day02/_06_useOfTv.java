package Day02;

public class _06_useOfTv {

	public static void main(String[] args) {
	//1. ��ü�� ������ �ʱ�ȭ
		//���� Tv�� Ŭ���� ���� tv�� ����(Tv��� ���θ޼ҵ� ���� ���� Ŭ����)
		//Tv, Speaker Ŭ������ ����?���ִ�.
		Tv tv = new Tv("Apple", 5000000);
		
		//������ ��ü�� �Ӽ��̳� �޼ҵ忡 ������ ����
		//������ ��ü �� .�� �ٿ��� ������ �� ����.
	//2. ��ü �Ӽ� �� ���
		System.out.println("TV�� �������" + tv.company + "�Դϴ�.");
		System.out.println("TV�� ������" + tv.price + "�Դϴ�.");
		
	//3. ��ü �޼ҵ�(����) ����
		tv.turnOn(1);
		tv.changeChannel();
		//tv.changeVolumn();
		tv.volumnUp();
		tv.volumnDown();
		tv.turnOff();

	}

}
