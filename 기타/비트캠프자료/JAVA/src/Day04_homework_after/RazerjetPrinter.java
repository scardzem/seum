package Day04_homework_after;

public class RazerjetPrinter extends Printer {
	int tonerAmount;
	
	public RazerjetPrinter() {
		this.model = "레이저젯프린터";
		this.company = "LG";
		this.connectType = "USB";
		this.paper = 100;
		this.tonerAmount = 100;
	}
	
	@Override
	public void print() {
		System.out.println(this.company + " " + this.model + "로 한 장 출력합니다.");
		this.paper -= 1;
		this.tonerAmount -= 3;
		System.out.println("출력이 완료됐습니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.tonerAmount + "% 남았습니다.");
	}
	
	public void turnOn() {
		System.out.println(this.company + " " + this.model + "전원이 켜집니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.tonerAmount + "% 남았습니다.");
	}
	
	public void turnOff() {
		System.out.println(this.company + " " + this.model + "전원이 꺼집니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.tonerAmount + "% 남았습니다.");
	}
}
