package Day06_homework_after;

public abstract class Employee {   //�θ� Ŭ���� ���� 
	int num;
	String name;
	double pay;
	
	public Employee(int num, String name, double pay) { 
		this.num = num;
		this.name = name;
		this.pay = pay;
	}
	
	public void ShowEmployeeInfo() {
		System.out.println("��� : " + num );
		System.out.println("�̸� : " + name);
	}
	
	public abstract double getMonthPay();  
}
