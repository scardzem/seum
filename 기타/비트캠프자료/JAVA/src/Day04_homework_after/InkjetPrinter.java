package Day04_homework_after;

public class InkjetPrinter extends Printer {
	int inkAmount;
	
	InkjetPrinter() {
		this.model = "잉크젯프린터";
		this.company = "삼성";
		this.connectType = "USB";
		this.paper = 100;
		this.inkAmount = 100;
	}
	
	@Override
	public void print() {
		System.out.println(this.company + " " + this.model + "로 한 장 출력합니다.");
		this.paper -= 1;
		this.inkAmount -= 5;
		System.out.println("출력이 완료됐습니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.inkAmount + "% 남았습니다.");
	}
	
	public void powerOn() {
		System.out.println(this.company + " " + this.model + "전원이 켜집니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.inkAmount + "% 남았습니다.");
	}
	
	public void powerOff() {
		System.out.println(this.company + " " + this.model + "전원이 꺼집니다.");
		System.out.println("현재 종이는 " + this.paper + "장 잉크는 " + this.inkAmount + "% 남았습니다.");
	}
}
