package Day05;

public class _06_numberFormatException {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		String str1 = "100";
		//���ڿ��� ������ �Ǽ��� ġȯ ��
		//ġȯ �Ұ����� ���� ���ԵǸ� NumberFormatException �߻�
		String str2 = "bit100";
		
		int num1 = Integer.parseInt(str1);
		int num2 = Integer.parseInt(str2);

	}

}
