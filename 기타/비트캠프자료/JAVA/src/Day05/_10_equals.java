package Day05;

public class _10_equals {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		FreeBoard fBoard1 = new FreeBoard();
		//FreeBoard fBoard2 = new FreeBoard(); �� ���� �ٸ� ��ü�� ��µ�.
		FreeBoard fBoard2 = fBoard1;
		
		//�ٸ� �� ��ü ���� �ÿ��� �ٸ� ��ü�� �ν�
		//FreeBoard fBoard2 = new FreeBoard();
		
		boolean classChk = fBoard1.equals(fBoard2); //�Ʒ����Ͼ� ���� ������.
		boolean classChk2 = fBoard1 == fBoard2;  //�����̶� ���� ������.
		
		if(classChk) {
			System.out.println("fBoard1�� fBoard2�� ���� ��ü �Դϴ�.");
		} else {
			System.out.println("fBoard1�� fBoard2�� �ٸ� ��ü �Դϴ�.");
		}
		

	}

}
