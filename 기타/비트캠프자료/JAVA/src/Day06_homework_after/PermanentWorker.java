package Day06_homework_after;

public class PermanentWorker extends Employee{
	double bonus;
	//PermanentWorker : ������
	public PermanentWorker(int num, String name, double bonus, double pay) {
		super(num, name, pay);
		this.bonus = bonus;
	}
	
	public void ShowEmployeeInfo() {
		super.ShowEmployeeInfo();
		System.out.println("���� : " + pay); 
		System.out.println("���ʽ� : " + bonus);
	}
	
	//@Override�� ���� ���ص� Overriding �� - �����Ϸ�(�ڽ���? ���� �̸����� �����? 
	//�θ� ��ü���� �̰� �ִ��� ã�� �ʰ� �������̵� �ƴٰ� �ν��Ѵٰ� ��.)
	public double getMonthPay() {	
		System.out.println("�̸� : " + name);
		System.out.println("���� : " + (pay + bonus) / 12);
		
		return (pay + bonus) / 12 ;
	}
}
