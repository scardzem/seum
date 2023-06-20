package Day03;

public class _06_getter_setter {

	public static void main(String[] args) {
		
		userInfo_06_ userinfo = new userInfo_06_();
		
		//private로 선언된 필드에 직접 접근 불가
		//userinfo.userName = "홍길동";
		
		//private로 선언된 필드의 값을 바꿀 때는 setter 메소드를 사용
		userinfo.setUserName("홍길동");
		userinfo.setPhoneNum("010-0000-0000");
		userinfo.setUserAge(20);
		
		//private로 선언된 필드 값의 사용은 getter 메소드 사용		
		//System.out.println("사용자의 이름은 : " + userinfo.userName()); //get없이 접근하려고 하면 오류남
		System.out.println("사용자의 이름은 : " + userinfo.getUserName());
		System.out.println("사용자의 연락처는 : " + userinfo.getPhoneNum());
		System.out.println("사용자의 나이는 : " + userinfo.getUserAge());
		
		
		
	}

}
