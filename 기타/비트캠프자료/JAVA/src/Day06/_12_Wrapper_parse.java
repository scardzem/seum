package Day06;

public class _12_Wrapper_parse {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		//String�� "100"�� int�� 100���� ġȯ
		int num1 = Integer.parseInt("100");
		//String�� "3.14"�� double�� 3.14�� ġȯ
		double num2 = Double.parseDouble("3.14");
		//String�� "true"�� boolean�� true�� ġȯ
		boolean chk = Boolean.parseBoolean("true");
		
		System.out.println(num1);
		System.out.println(num2);
		System.out.println(chk);
	}

}
