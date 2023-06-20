package Day07;

import java.io.File;
import java.text.SimpleDateFormat;
import java.util.Date;

public class _05_File {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub
		File dir = new File("D:/lecture/JAVA/test");
		File file1 = new File("D:/lecture/JAVA/test/file1.txt");
		File file2 = new File("D:/lecture/JAVA/test/file2.txt");
		File file3 = new File("D:/lecture/JAVA/test/file3.txt");
		
		if(dir.exists() == false) {
			dir.mkdir();
		}
		if(file1.exists() == false) {
			file1.createNewFile();
		}
		if(file2.exists() == false) {
			file2.createNewFile();
		}
		if(file3.exists() == false) {
			file3.createNewFile();
		}
		
		File[] fileArr = dir.listFiles();
		
		System.out.println("시간\t\t형태\t\t\t크기\t이름");
		System.out.println("----------------------------------");
		
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd a HH:mm");
		
		for(File file : fileArr) {
			System.out.print(sdf.format(new Date(file.lastModified())));
			if(file.isDirectory()) {
				System.out.print("\t<DIR>\t\t\t" + file.getName());
			} else {
				System.out.print("\t\t\t" + file.length() + "\t" + file.getName());
			}
			System.out.println();
		}
	}

}
