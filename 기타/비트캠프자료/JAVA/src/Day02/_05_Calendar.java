package Day02;
//Week Enum에서 값 불러옴
import java.util.Calendar;

public class _05_Calendar {

	public static void main(String[] args) {
		
		Calendar cal = Calendar.getInstance();
		
		//현재 년도 값
		int year = cal.get(Calendar.YEAR);
		//현재 월 값 반환(0 ~ 11)
		int month = cal.get(Calendar.MONTH) + 1;  //여기는 +1을 해줘야 한다고함
		//현재 날짜 값 반환
		int weekday = cal.get(Calendar.DAY_OF_MONTH);
		//현재 요일 값 반환(일요일(1) ~ 토요일(7))
		int day = cal.get(Calendar.DAY_OF_WEEK);
		//현재 시간 반환
		int hour = cal.get(Calendar.HOUR);
		//현재 분 반환
		int minute = cal.get(Calendar.MINUTE);
		//현재 초 반환
		int second = cal.get(Calendar.SECOND);
		
		
		System.out.println("지금은 " + year + "년 " + month + "월 " + weekday + "일 " + day + "요일 " + hour + "시 " + minute + "분 " + second + "초 입니다.");
		
	}

}
