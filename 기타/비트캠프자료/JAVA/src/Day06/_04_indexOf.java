package Day06;

public class _04_indexOf {

	public static void main(String[] args) {
		
		String str1 = "hello java";
		String str2 = "hell python";
		
		if(str1.indexOf("java") != -1) { 
			//�ش� ���ڿ��� ���� ��ġ ǥ��
			System.out.println("hello java".indexOf("java"));
			System.out.println("�ش� ���ڿ��� ���ԵǾ� �ֽ��ϴ�.");
		} else {
			System.out.println("�ش� ���ڿ��� ���ԵǾ� ���� �ʽ��ϴ�.");
		}
		
System.out.println("----------------------");		

		if(str2.indexOf("java") != -1) {
			System.out.println(str1.indexOf("java"));
			System.out.println("�ش� ���ڿ��� ���ԵǾ� �ֽ��ϴ�.");
		} else {
			System.out.println("�ش� ���ڿ��� ���ԵǾ� ���� �ʽ��ϴ�.");
		}
		

	}

}
