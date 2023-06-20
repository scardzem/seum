package Day06;

import java.text.SimpleDateFormat;
import java.util.Date;

public class _15_Date {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//java.utill 패키지는 java.lang 패키지와 다르게
		//기본제공 되지 않으므로 import 필요
		Date now = new Date();
/*		 문자열로 표기할 때 아래 yyyy MM dd hh mm ss (단위별 대소문자) 아래처럼 맞게 써줘야함.
		 년 -> yyyy
		 월 -> MM
		 일 -> dd
		 시 -> hh
		 분 -> mm
		 초 -> ss																	*/
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy년 MM월 dd일 hh시 mm분 ss초");
		
		System.out.println("현재 날짜와 시간은 : " + sdf.format(now));
		//Date객체를 .toString()으로 문자열 치환 시 날짜와 시간을 영문으로 표시
		System.out.println(now.toString());
	}

}
