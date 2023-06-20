package Day04_homework_after;

public class RazerjetPrinter extends Printer {
	int tonerAmount;
	
	public RazerjetPrinter() {
		this.model = "��������������";
		this.company = "LG";
		this.connectType = "USB";
		this.paper = 100;
		this.tonerAmount = 100;
	}
	
	@Override
	public void print() {
		System.out.println(this.company + " " + this.model + "�� �� �� ����մϴ�.");
		this.paper -= 1;
		this.tonerAmount -= 3;
		System.out.println("����� �Ϸ�ƽ��ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.tonerAmount + "% ���ҽ��ϴ�.");
	}
	
	public void turnOn() {
		System.out.println(this.company + " " + this.model + "������ �����ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.tonerAmount + "% ���ҽ��ϴ�.");
	}
	
	public void turnOff() {
		System.out.println(this.company + " " + this.model + "������ �����ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.tonerAmount + "% ���ҽ��ϴ�.");
	}
}
