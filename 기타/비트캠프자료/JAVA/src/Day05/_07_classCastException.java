package Day05;

public class _07_classCastException {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		FreeBoard fBoard = new FreeBoard();
		NoticeBoard nBoard = new NoticeBoard();
		
		changeClass(fBoard);
	}

	public static void changeClass(Board board) {
		//FreeBoard ��ü�� NoticeBoard�� ����ȯ �Ұ����Ͽ�
		//ClassCastException �߻�
		NoticeBoard nBoard2 = (NoticeBoard)board;
	}
	
}
