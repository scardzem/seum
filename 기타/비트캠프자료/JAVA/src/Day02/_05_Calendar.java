package Day02;
//Week Enum���� �� �ҷ���
import java.util.Calendar;

public class _05_Calendar {

	public static void main(String[] args) {
		
		Calendar cal = Calendar.getInstance();
		
		//���� �⵵ ��
		int year = cal.get(Calendar.YEAR);
		//���� �� �� ��ȯ(0 ~ 11)
		int month = cal.get(Calendar.MONTH) + 1;  //����� +1�� ����� �Ѵٰ���
		//���� ��¥ �� ��ȯ
		int weekday = cal.get(Calendar.DAY_OF_MONTH);
		//���� ���� �� ��ȯ(�Ͽ���(1) ~ �����(7))
		int day = cal.get(Calendar.DAY_OF_WEEK);
		//���� �ð� ��ȯ
		int hour = cal.get(Calendar.HOUR);
		//���� �� ��ȯ
		int minute = cal.get(Calendar.MINUTE);
		//���� �� ��ȯ
		int second = cal.get(Calendar.SECOND);
		
		
		System.out.println("������ " + year + "�� " + month + "�� " + weekday + "�� " + day + "���� " + hour + "�� " + minute + "�� " + second + "�� �Դϴ�.");
		
	}

}
