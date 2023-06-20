package Day05;

import java.util.Date;

public class _11_toString {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		FreeBoard fBoard = new FreeBoard();
		Date date = new Date();
		
		//toString 메소드는 overriding 해서 원하는 정보를 출력하도록 수정 가능
		System.out.println(fBoard.toString());
		System.out.println(date.toString());

	}

}
