package Day03_homework;

public class Felidae extends Mammal {
	String felidae;
	
	
	//�⺻ ������
	//�⺻ �����ڰ� ������ �ڽ� Ŭ����(Lion, Tiger���� �ҷ��ö� �Ʒ� Feldae(Stringm, String f){}�� �浹�� ���� ���� ���
	//���� ��� Tiger���� extends �ϸ� �⺻ �����ڸ� �ҷ����� ����°Ŵ�.
	//new Felidae�� �⺻������ �Ӽ��� �ҷ��ͼ� �Ӽ��鸸 �ҷ����°���.
	Felidae() {
		
	}
	
	Felidae(String m, String f){
		mammal = m;
		felidae = f;
	}

	void fel1() {
		System.out.println(felidae);
	}
	
}
