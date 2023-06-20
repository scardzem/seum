package Day06;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class _22_List_Map {

	public static void main(String[] args) {
		List<Map<String, String>> listMap = new ArrayList<Map<String, String>>();
		Map<String, String> map = new HashMap<String, String>();

		//키 값과 벨류 값 입력
		map.put("id", "bit");
		map.put("pw", "1111");
		map.put("name","bit1");
		map.put("email", "aaa@naver.com");
		
		listMap.add(map);
		
		map = new HashMap<String, String>(); // 객체를 새로 만들어 주지 않으면 출력 결과에 java만 2번 출력된다(덮어씌워지는듯)
		
		map.put("id", "java");
		map.put("pw", "2222");
		map.put("name","bit2");
		map.put("email", "bbb@naver.com");
		
		listMap.add(map);
		
		/*	리스트에 각각의 맵을 저장한다.(id,pw,name,email)		 * ���� 以�愿��� ������ �ㅼ�닿� ��蹂닿� ������ Map�대��.(id, pw, name, email)
		 *  원래 써놓은 메모가 한글이 깨져서 뭐라고 쓴건지 모르겠다. 			 * 	list�� Map�� 諛곗�대���� 寃��대��.
			list
			{	"id" : "bit",
				"pw" : "1111",
				"name" : "bit1",
				"email" : "aaa@naver.com"
			},
			{	"id" : "java",
				"pw" : "2222",
				"name" : "bit2",
				"email" : "bbb@naver.com"
				}			
		*/
		for(int i=0; i < listMap.size(); i++) {
			System.out.println(listMap.get(i).get("id"));
		}

	}

}
