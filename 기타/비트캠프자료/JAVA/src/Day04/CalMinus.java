package Day04;

public class CalMinus extends Calculator {
	
	//�������̵�
	//�θ� Ŭ������ �����ϴ� �޼ҵ带 ������
	//�θ� Ŭ������ �����ϴ� �޼ҵ�� ���°� ������ �����ؾ� ��
	
	//������̼� : � Ŭ������ �޼ҵ�, �Ǵ� �ʵ尡
	//				� ������ �ϴ��� ���� �����Ϸ��� �˷��༭
	//				������ �ӵ� ���(@Override : �������̵� �ѰŶ�� ��)
	
	/*
	@Override
	public int calculate(int a, int b) {
		return a-b;
	}
	
	@Override
	public int calculate(int a, int b, int c) {
		
		return a - b - c;
		
	}
*/
	
	//-----------------------------------
	
	
	int chk; //(chk 1�� �� ���� ����, 2�� ���� ���̳ʽ� ���� �ǵ��� �غ���)
			//���� ��Ǯ� �Ʒ��� ����� Ǯ�� ����
	@Override
	public int calculate(int a, int b) {
		if(chk==1) {
			return super.calculate(a, b);
		} else { 
			return a-b;		
		}
	}
	
	
	@Override
	public int calculate(int a, int b, int c) {
		if(chk ==1) {
			return super.calculate(a,  b, c);			
		} else {
			return a - b - c;
		}
	}
	
	
}
