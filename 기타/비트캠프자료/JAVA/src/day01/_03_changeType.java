package day01;

public class _03_changeType {

	public static void main(String[] args) {
	// 1.�ڵ� Ÿ�Ժ�ȯ
		byte byteVal=10;
		//�������� ���� byteŸ�Կ��� �������� ū intŸ������ �ڵ����� Ÿ�Ժ�ȯ �̷����
		int intVal=byteVal;
		
		System.out.println(intVal);
		System.out.println("-----------------------------------");
		
		char ch1='A';
		//�������� ���� byteŸ�Կ��� �������� ū intŸ������ �ڵ����� Ÿ�Ժ�ȯ �̷����
		//A�� �ش��ϴ� ASCII�ڵ� �� ǥ��
		intVal=ch1;
		
		System.out.println(intVal);
		System.out.println("-----------------------------------");
		
	//2. ���� Ÿ�� ��ȯ
		int intVal2=10;
		byte byteVal2=(byte)intVal2;
		//int Ÿ���� ������ byteŸ������ ���� Ÿ�� ��ȯ
		System.out.println(byteVal2);
		System.out.println("-----------------------------------");
		
		int intVal3=65;
		//int Ÿ���� ������ char Ÿ������ ���� Ÿ�� ��ȯ
		//ASCII �ڵ� �� 65�� A ���
		char ch2=(char)intVal3;
		System.out.println(ch2);
		System.out.println("-----------------------------------");
		
	//3. ���� �� Ÿ�� ��ȯ
		int num1=10;
		long num2=20L;
		//���� �Ǳ� ���� num1�� Ÿ���� longŸ������ �ڵ� ��ȯ
		long result=num1+num2;
		
		System.out.println(result);
		System.out.println("-----------------------------------");
		
		float num3=3.14f;
		double num4=6.75;
		//���� �Ǳ� ���� num3�� Ÿ���� doubleŸ������ �ڵ� ��ȯ
		double result2=num3+num4;
		
		System.out.println(result2);
		System.out.println("-----------------------------------");
		
	//4. ���ڿ��� ���Ե� +���꿡���� Ÿ�� ��ȯ
		int num5=111;
		String str1="hello";
		//num5�� �ڵ����� ���ڿ��� ��ȯ �Ǿ� ���ڿ� ���� ������ �̷����
		String result3=str1+num5;
		
		System.out.println(result3);
		System.out.println("-----------------------------------");
		
	//5. ���ڿ��� ���� Ÿ�� ��ȯ
		String str2="100";
		//�ڹٿ��� �����ϴ� Integer Ŭ������ int�� Ÿ�Ժ�ȯ �޼ҵ带 �̿��� ���� Ÿ�� ��ȯ
		int num6=Integer.parseInt(str2);
		
		System.out.println(num6);
		System.out.println("-----------------------------------");
		
		String str3="3.14";
		double num7=Double.parseDouble(str3);
	}

}
