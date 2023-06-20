package Day04;
//Phone과 SmartPhone에서 블록 주석 돼있는부분 주석 해제하고 써있는내용 주석처리하면 정상으로 돌아올거임
public class _06_inheritTypeChange {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
	//(word 6.)상속에서의 타입 변환 설명
		//1. 자식 객체 생성
		//SmartPhone 형태이면서 Phone의 형태도 가지고 있다.
		SmartPhone smartPhone = new SmartPhone();
		
		//2. 부모객체에 자식객체 삽입
		//자식 객체는 부모 객체의 형태도 띄고 있기 때문에
		//부모 객체의 형태로 형변환이 발생하여 부모객체의 형태로 사용 가능
		Phone phone = (Phone)smartPhone; //phone에 smartPhone 객체가 삽입 되었고, 
								  //형변환 되었기 때문에 자식 객체(smartPhone)는 사용할 수 없다
								  //phone의 속성이 smartphone의 속성으로 바뀐다는 뜻 
		//3. 형 변환된 부모 객체의 사용
		//부모객체로 형 변환 되었기 때문에 자식 객체의 멤버는 사용 불가능
		phone.showPrice();
		//phone.showSize();
		
		//자식 객체는 자식 객체 그대로 사용 가능
		//Phone phone = (Phone)smartPhone; 
		smartPhone.showSize();

	}

}
