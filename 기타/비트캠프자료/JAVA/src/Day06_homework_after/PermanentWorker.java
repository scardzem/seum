package Day06_homework_after;

public class PermanentWorker extends Employee{
	double bonus;
	//PermanentWorker : 정규직
	public PermanentWorker(int num, String name, double bonus, double pay) {
		super(num, name, pay);
		this.bonus = bonus;
	}
	
	public void ShowEmployeeInfo() {
		super.ShowEmployeeInfo();
		System.out.println("연봉 : " + pay); 
		System.out.println("보너스 : " + bonus);
	}
	
	//@Override를 선언 안해도 Overriding 됨 - 컴파일러(자식을? 같은 이름으로 만들면? 
	//부모 객체에도 이게 있는지 찾지 않고 오버라이딩 됐다고 인식한다고 함.)
	public double getMonthPay() {	
		System.out.println("이름 : " + name);
		System.out.println("월급 : " + (pay + bonus) / 12);
		
		return (pay + bonus) / 12 ;
	}
}
