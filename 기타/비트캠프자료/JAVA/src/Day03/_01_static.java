package Day03;

public class _01_static {

	public static void main(String[] args) {
		
		//word 1~2�� ����
		//���� ���(�Ӽ�) ���
		//��ü ���� ���� ��� ����(��ü ���� ���ϰ� carColor�� �ٷ� ��� �Ǵ� ����)
		//(�𸣰�����) static���� ������ ���(?)�̱� ������ ��ü ���� ���� ��� ������ �Ŷ����
		//Car car = new Car();�� ���� ��ü���� ���� Ŭ������ ���(�Ӽ��� �޼ҵ�)�� ����(Car.color;)
		

		String carColor = Car.color;
		System.out.println(carColor);
		System.out.println("------------------------");
		
		//���� �޼ҵ� ���
		Car.colorInfo();
		System.out.println("------------------------");
		
		//�ν��Ͻ� ��� ��� (car��� ��ü(����)�� ������ ���(���) ������ ����)
		/*
		Car car = new Car();
		  
		  
		String carCompany = car.company; System.out.println(carCompany);
		System.out.println("------------------------");
		  
		car.companyInfo();
		  
		System.out.println("------------------------");
		 */

		
		
		
		
	}

}
