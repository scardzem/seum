package Day06;

import java.util.Calendar;

public class _16_Calendar {

	public static void main(String[] args) {
		
		Calendar now = Calendar.getInstance();
		
		//년도 정보 추출
		int year = now.get(Calendar.YEAR);
		
		//월 정보 추출
		//return되는 값이 0~11이기 때문에 +1을 해준다.
		int month = now.get(Calendar.MONTH)+1;
		
		//일 정보 추출
		int day = now.get(Calendar.DAY_OF_MONTH);
		
		//요일 정보 추출(0:일요일 ~ 6:토요일)
		int weekDay = now.get(Calendar.DAY_OF_WEEK);
		
		String strWeekDay = "";
		
		switch(weekDay) {
			case Calendar.MONDAY:
				strWeekDay = "월";
				break;
			case Calendar.TUESDAY:
				strWeekDay = "화";
				break;
			case Calendar.WEDNESDAY:
				strWeekDay = "수";
				break;
			case Calendar.THURSDAY:
				strWeekDay = "목";
				break;
			case Calendar.FRIDAY:
				strWeekDay = "금";
				break;
			case Calendar.SATURDAY:
				strWeekDay = "토";
				break;
			case Calendar.SUNDAY:
				strWeekDay = "일";
				break;
		}
		
		int amPm = now.get(Calendar.AM_PM);
		String strAmPm = "";
		if(amPm == Calendar.AM) {
			strAmPm = "오전";			
		} else {
			strAmPm = "오후";
		}
		
		//시간 정보 추출(0~11시까지 리턴)
		//HOUR_OF_DAY : 0~23시까지 리턴받을 수 있음
		int hour = now.get(Calendar.HOUR);
		//0시라고 표기되는 것을 12시로 표기되도록 바꿔준다.
		if(hour ==0) {
			hour = 12;
		}
		//분 정보 추출
		int minute = now.get(Calendar.MINUTE);
		//초 정보 추출
		int second = now.get(Calendar.SECOND);
		
		System.out.println(year + "년 " + month + "월 " + day + "일");
		System.out.println(strWeekDay + "요일 " + strAmPm);
		System.out.println(hour+"시 " + minute + "분 " + second + "초");
	}

}
