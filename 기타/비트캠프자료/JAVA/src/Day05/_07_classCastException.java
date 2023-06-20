package Day05;

public class _07_classCastException {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		FreeBoard fBoard = new FreeBoard();
		NoticeBoard nBoard = new NoticeBoard();
		
		changeClass(fBoard);
	}

	public static void changeClass(Board board) {
		//FreeBoard 객체가 NoticeBoard로 형변환 불가능하여
		//ClassCastException 발생
		NoticeBoard nBoard2 = (NoticeBoard)board;
	}
	
}
