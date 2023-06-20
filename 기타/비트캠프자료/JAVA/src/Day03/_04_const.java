package Day03;

public class _04_const {

	public static void main(String[] args) {
		//상수도 final 키워드를 이용하여 선언되기 때문에 값의 변경이 불가능 (아랫줄 주석 풀어보면 오류남)
		//Earth.EARTH_AREA=6000;
		System.out.println("지구의 반지름 : " + Earth.EARTH_AREA+"km");
		System.out.println("지구의 면적 : " + Earth.EARTH_AREA + "km^2");

	}

}
