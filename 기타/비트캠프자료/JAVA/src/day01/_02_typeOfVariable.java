package day01;

public class _02_typeOfVariable {

	public static void main(String[] args) {
		
		// 1. ���� ����� ���ÿ� �ʱ�ȭ
		int num1=1;
		
		//2. JVM�� ������ ������ �⺻������ int�� �������ϱ� ������
		//   ���ͷ� ����� L�� ���� �ڿ� �ٿ��� long�� Ÿ������ �������� ��
		long bigNum1 =10;
		long bigNum2 = 10L;
		
		//3. int�� ������ �ʰ��� ������ ���ؼ� ���ͷ� ��� L�� ������ int����
		//   �νĵǾ� ���� �߻�
		//long bigNum3=10000000000000000;
		long bigNum4=10000000000000000L;
		
		//4. char���� ���� �״�� ���
		//   int���� ���� ���� �� �ش� ���ڿ� ASCII �ڵ� �� ���
		char ch1='A';
		int  ch2='A';
		
		System.out.println(num1);
		System.out.println(bigNum2);
		System.out.println(bigNum4);
		System.out.println("--------------------");
		System.out.println(ch1);
		System.out.println(ch2);
		
		//5. ���ڿ� Ÿ�� ���
		String str1="hello java";
		String str2="hello \"java\"";
		String str3="hello \t java";
		String str4="hello \njava";
		
		//syso + ctrl + spacebar ���� ������ System.out.println �ڵ��Էµ�
		System.out.println("--------------------'");
		System.out.println(str1);
		System.out.println(str2);
		System.out.println(str3);
		System.out.println(str4);
		
		//7. �Ǽ��� Ÿ�� ���
		// JVM���� �Ǽ��� Ÿ���� �⺻������ double������ �����ϵǱ� ������
		// floatŸ�Կ� ���ͷ������� f�� ǥ������ ������ ���� �߻�
		//float var1=3.14;
		float var2=3.14f;
		double var3=3.14;
		
		System.out.println("--------------------");
		System.out.println(var2);
		System.out.println(var3);
		
		//8. boolean Ÿ�� ���
		boolean var4=true;
		boolean var5=true;
		int num2=10;
		int num3=11;
		
		//num2�� 2�� ���� �������� 0�� ��
		if(num2%2==0) {
			var4=true;
		//num2�� 2�� ���� �������� 0�� �ƴ� ��
		} else {
			var4=false;
		}
		//num3�� 2�� ���� �������� 0�� ��
		if(num3%2==0) {
			var5=true;
		//num3�� 2�� ���� �������� 0�� �ƴ� ��
		} else {
			var5=false;
		}
		
		System.out.println("--------------------");
		System.out.println(var4);
		System.out.println(var5);
		
		
		
		
	}

}
