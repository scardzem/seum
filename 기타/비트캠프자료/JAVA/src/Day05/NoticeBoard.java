package Day05;

public class NoticeBoard implements Board {

	@Override
	//공지사항게시판 게시글 목록 조회
	public void getBoardList() {
		System.out.println("공지사항 게시판 게시글 목록 조회");
		System.out.println("공지사항 게시판 등록 시 파일 첨부");
	}
	
	@Override
	//공지사항게시판 게시글 등록
	public void registBoard() {
		System.out.println("공지사항 게시판 게시글 등록");
		System.out.println("공지사항 게시판 등록 시 파일 첨부");
	}
	
	@Override
	//공지사항게시판 게시글 수정
	public void updateBoard() {
		System.out.println("공지사항 게시판 게시글 수정");
	}
	
	@Override
	//공지사항게시판 게시글 삭제
	public void deleteBoard() {
		System.out.println("공지사항 게시판 게시글 삭제");
	}
	
	
	
}
