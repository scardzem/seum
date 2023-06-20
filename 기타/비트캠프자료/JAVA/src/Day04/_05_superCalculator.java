package Day04;

import java.util.Scanner;

public class _05_superCalculator {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		
		//CalMinus Å¬·¡½º¿¡ ¿¬½À¹®Á¦ ³»¿ë ÀÖÀ½ (¾Æ·¡´Â °­»ç´Ô Ç®ÀÌ)
		System.out.println("1. µ¡¼À");
		System.out.println("2. »¬¼À");
		Scanner sc = new Scanner(System.in);
		CalMinus calMinus = new CalMinus();
		
		calMinus.chk = sc.nextInt();
		//chk == 1 ºÎ¸ðÅ¬·¡½ºÀÎ CalculatorÀÇ calculate ¸Þ¼Òµå°¡ È£ÃâµÇ¾î µ¡¼ÀÀÇ °á°ú
		//chk == 2  ÀÚ½ÄÅ¬·¡½ºÀÎ CalMinusÀÇ ¸Þ¼Òµå°¡ ½ÇÇàµÇ¾î »¬¼ÀÀÇ °á°ú
		int result1 = calMinus.calculate(10,20);
				
		if(calMinus.chk == 1){
			System.out.println("µ¡¼ÀÀÇ °á°ú : " + result1);
		} else {
			System.out.println("»¬¼ÀÀÇ °á°ú : " + result1);
		}

		
		int result2 = calMinus.calculate(10, 20, 30);
		
		if(calMinus.chk ==1) {
			System.out.println("µ¡¼ÀÀÇ °á°ú : "+ result2);
		} else {
			
			System.out.println("»¬¼ÀÀÇ °á°ú : " + result2);
		}
		
		
}
}
