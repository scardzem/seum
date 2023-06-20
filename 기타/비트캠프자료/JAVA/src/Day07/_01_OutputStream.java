package Day07;

import java.io.FileOutputStream;
import java.io.OutputStream;

public class _01_OutputStream {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub

		//FileOutputStream을 객체 생성 시 파일이 저장 될 위치와 파일명을 지정 해줘야 한다.
		//입출력 Stream을 사용할 때는 예외처리가 필수적으로 동반 되어야 한다.
		//D:/lecture/JAVA/test.db 으로 위치와 파일명 지정함
		OutputStream os = new FileOutputStream("D:/lecture/JAVA/test.db");
		
		byte[] arr = {10, 20, 30};
		
		os.write(arr);
		os.flush();
		os.close();
		
		//실행 하면 해당 위치에 파일이 생성 된다.
		//생성된 파일을 입력 스트림으로 불러와야 한다.
		
		
		
		
		
	}

}
