package Day02;

import java.util.Calendar;

public class _04_useOfEnum {

	public static void main(String[] args) {

		//열거타입 선언 및 초기화
		Week today = null;
		
		//자바에서 제공하는 Calendar 객체를 이용하여 현재 날짜, 요일, 시간 받아옴
		Calendar cal = Calendar.getInstance();
		
		//현재 날짜, 요일, 시간 데이터에서 요일 정보만 가져옴
		//일요일(1) ~ 토요일(7)로 int 값으로 전달
		int week = cal.get(Calendar.DAY_OF_WEEK);
		
		switch(week) {
			case 1 :
				today = Week.SUNDAY;
				break;
			case 2 :
				today = Week.MONDAY;
				break;
			case 3 :
				today = Week.TUESDAY;
				break;
			case 4 :
				today = Week.WEDNESDAY;
				break;
			case 5 :
				today = Week.THURSDAY;
				break;
			case 6 :
				today = Week.FRIDAY;
				break;
			case 7 :
				today = Week.SATURDAY;
				break;
		}
			System.out.println("오늘 요일은 " + today);
	}

}
