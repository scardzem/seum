package Day02_homework;

public class _middle_1 {

	public static void main(String[] args) {
		
/*		
		//Day02 homework middle 1������
	      int nat[]=new int[100];
	      int j=0;
	      
	      for(int i=1; i<=1000; i++) {
	         if(i%2==0 && i%7==0) {
	            System.out.print(i+" "); //2�� ����̸鼭 7�� ����� ���� ���

	               nat[j]=i;
	               j++;
	         }

	      }
	      System.out.println("");
	      System.out.println("2�� ����̸鼭 7�� ����� ���� ���� : "+j);

	      //Day02 advancedFor ������
	      int k=0;
	      for(int natural:nat) {
	         k+=natural;
	      }
	      System.out.println(k);
*/
		
		//���� Ǯ��		
		/*1. 1000������ �ڿ��� �߿��� 2�� ����̸鼭 7�� ����� ���ڸ� ����ϰ�,
   			 �� ��µ� ���ڵ��� ���� ���ϴ� ���α׷��� �ۼ��ϼ���*/
		int sum = 0;
		
		for(int i = 1; i <= 1000; i++) {
			if(i % 2 == 0 && i % 7 == 0) {
				System.out.println(i);
				sum += i;
			}
		}
		
		System.out.println("1000������ �ڿ��� �� 2�� ����̸鼭 7�� ����� ������ : " + sum);
		
		
		
	}

}
