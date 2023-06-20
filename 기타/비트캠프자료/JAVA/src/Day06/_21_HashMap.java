package Day06;

import java.util.HashMap;
import java.util.Map;

public class _21_HashMap {

	public static void main(String[] args) {
		//<키 값의 타입, 벨류 값의 타입>
		Map<String, String> map = new HashMap<String, String>();

		//키 값, 벨류 값 입력
		map.put("id", "bit");
		map.put("pw", "1111");
		map.put("name","bit1");
		map.put("email", "aaa@naver.com");
		/*		키 값 : 벨류 값  (키 값에 벨류 값이 들어가있는거)
				메소드는 키갑으로 동작한다고 생각하면 편함.
			map
			{	"id" : "bit",
				"pw" : "1111",
				"name" : "bit1",
				"email" : "aaa@naver.com
			}
		*/
		System.out.println(map.get("id"));
		System.out.println(map.get("pw"));
		System.out.println(map.get("name"));
		System.out.println(map.get("email"));
		
		System.out.println("저장된 객체의 총 개수 : " + map.size());
		
		map.remove("name");
		System.out.println("저장된 객체의 총 개수 : " + map.size());
		
	}

}
