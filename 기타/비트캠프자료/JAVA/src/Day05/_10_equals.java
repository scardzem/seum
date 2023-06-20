package Day05;

public class _10_equals {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		FreeBoard fBoard1 = new FreeBoard();
		//FreeBoard fBoard2 = new FreeBoard(); 로 쓰면 다른 객체로 출력됨.
		FreeBoard fBoard2 = fBoard1;
		
		//다른 두 객체 생성 시에는 다른 객체로 인식
		//FreeBoard fBoard2 = new FreeBoard();
		
		boolean classChk = fBoard1.equals(fBoard2); //아랫줄일아 같은 내용임.
		boolean classChk2 = fBoard1 == fBoard2;  //윗줄이랑 같은 내용임.
		
		if(classChk) {
			System.out.println("fBoard1과 fBoard2는 같은 객체 입니다.");
		} else {
			System.out.println("fBoard1과 fBoard2는 다른 객체 입니다.");
		}
		

	}

}
