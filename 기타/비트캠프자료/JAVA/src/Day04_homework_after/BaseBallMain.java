package Day04_homework_after;

public class BaseBallMain {
	public static int[] randomNum = new int[3];
	public static void main(String[] args) {
		BaseBallMenu menu = new BaseBallMenu();
		GeneratorThreeNum_advanced_ gen = new GeneratorThreeNum_advanced_(); // 난수 만들려고 만든 변수
		int chkGame = 3; // 3 : 첫 게임 입장
		
		while(true) {
			if(chkGame == 3 || chkGame == 1)
				randomNum = gen.generateThreeNum();
			
			chkGame = menu.menu(randomNum);
			
			if(chkGame == 2)
				break;
		}
	}
}
