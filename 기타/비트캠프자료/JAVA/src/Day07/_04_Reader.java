package Day07;

import java.io.FileReader;
import java.io.Reader;

public class _04_Reader {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub
		
		Reader reader = new FileReader("D:/lecture/JAVA/test.txt");
		
		while(true){
			int data = reader.read();  //read int형이라서 int로 값 준다.
			
			if(data == -1)
				break;
			
			System.out.println((char)data);
		}
		reader.close();
		
	}

}
