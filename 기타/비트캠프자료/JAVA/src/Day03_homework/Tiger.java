package Day03_homework;

public class Tiger extends Felidae {

	String tiger;
	String speed;
	
	//������(�̸��� Ŭ������� �����ϰ�, �ʵ� �Ӽ��� �°� ��ȣ �ȿ� �Է°� �ִ´�.)
	Tiger(String m, String f, String t, String s ){
		mammal=m;
		felidae=f;
		tiger=t;
		speed=s;		
	}
	
	void tiger1() {
		System.out.println("�� ������ " + mammal + "�̰� " + felidae+ "�̰� " + tiger+"�̰� �޸���� "+speed);
	}
	
	
}
