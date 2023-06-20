package Day05;

public class FreeBoard implements Board, Reply {

	@Override
	//자유게시판 게시글 목록 조회
	public void getBoardList() {
		System.out.println("자유게시판 게시글 목록 조회");
		System.out.println("한 페이지에 조회 가능한 게시글의 개수는 " + this.BOARD_COUNT + "개 입니다.");
	}
	
	@Override
	//자유게시판 게시글 등록
	public void registBoard() {
		System.out.println("자유게시판 게시글 등록");
	}
	
	@Override
	//자유게시판 게시글 수정
	public void updateBoard() {
		System.out.println("자유게시판 게시글 수정");
	}
	
	@Override
	//자유게시판 게시글 삭제
	public void deleteBoard() {
		System.out.println("자유게시판 게시글 삭제");
	}
	
	public static void getBoard() {
		System.out.println("자유게시판 게시글 1개 조회");
	}
	
	//-----------------------
	//(word 2.)Reply
	
	@Override
	//자유게시판 게시글에 답글 등록
	public void registReply() {
		System.out.println("답글 수정");
	}
	//자유게시판 게시글 답글 수정
	public void updateReply() {
		System.out.println("답글 수정");
	}
	//자유게시판 게시글 답글 삭제
	public void deleteReply() {
	System.out.println("답글 삭제");
	}
	//자유게시판 게시글 답글 목록 조회
	public void getReplyList() {
	System.out.println("답글 목록 조회");
	}
	
	
}
	
	
