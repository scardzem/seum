package Day04;

public class _09_reasonOfTypeChange {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Bus bus = new Bus();
		Taxi tax = new Taxi();
		
		Driver driver = new Driver();
		Vihicle vi = new Vihicle();

		//�Ű������� �ڽİ�ü ����
		//���޵� �ڽİ�ü�� �θ�ü ���·� ����ȯ
		//�������̵� �� �ڽİ�ü�� �޼ҵ尡 ȣ��
		
		//driver��ü(DriverŬ�����Ӽ�)�� drive()�Լ��� ȣ���ϰ�, �Ű������� bus�� �Է��Ѵٴ� ����.
		//(DriverŬ�������� �޼ҵ�� Driver driver�� ���ִµ� Bus�� �ڽ��̶� �θ��� Driver�� �Ӽ���
		//�ֱ� ������ �Ű������� �Է��� �����ϴ�.
		driver.drive(bus);
		driver.drive(tax);
		driver.drive(vi);
		

		
	}

}
