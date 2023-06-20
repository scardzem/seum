package Day04_homework_after;

public class InkjetPrinter extends Printer {
	int inkAmount;
	
	InkjetPrinter() {
		this.model = "��ũ��������";
		this.company = "�Ｚ";
		this.connectType = "USB";
		this.paper = 100;
		this.inkAmount = 100;
	}
	
	@Override
	public void print() {
		System.out.println(this.company + " " + this.model + "�� �� �� ����մϴ�.");
		this.paper -= 1;
		this.inkAmount -= 5;
		System.out.println("����� �Ϸ�ƽ��ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.inkAmount + "% ���ҽ��ϴ�.");
	}
	
	public void powerOn() {
		System.out.println(this.company + " " + this.model + "������ �����ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.inkAmount + "% ���ҽ��ϴ�.");
	}
	
	public void powerOff() {
		System.out.println(this.company + " " + this.model + "������ �����ϴ�.");
		System.out.println("���� ���̴� " + this.paper + "�� ��ũ�� " + this.inkAmount + "% ���ҽ��ϴ�.");
	}
}
