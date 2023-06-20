package com.spring.boardweb.controller.user;

import java.util.HashMap;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;
import com.spring.boardweb.UserVO;
import com.spring.boardweb.service.user.UserService;

@Controller
@RequestMapping("/user")
public class UserController {
	@Autowired
	UserService userService;
//	@RequestMapping(value="/join.do", method=RequestMethod.GET)
//	public String joinView() {
//		return "user/join";
//	}
//	
//	@RequestMapping(value="/join.do", method=RequestMethod.POST)
//	public String join() {
//		return "user/join";
//	}
	
	@RequestMapping("/join.do")
	public String join(UserVO userVO) {
		//ȸ������ ������ �Ѿ���� �ʾ��� ���� ȸ������ ȭ������
		if(userVO.getUserId() == null || userVO.getUserId().equals("")) {
			return "user/join";
		}
		
		//ȸ������ ������ �Ѿ���� ���� ȸ������ ó�� �� �α��� ȭ������
		userService.join(userVO);
		
		return "user/login";
		
	}
	
	@RequestMapping("/login.do")
	public String login() {
		return "user/login";
	}
	
	@RequestMapping("/idCheck.do")
	//ViewResolver�� Ÿ�� �Ǹ� ResponseBody�� HTML ������ ���� ȭ���� ����
	//ViewResolver�� �� �¿�� ��ȯ �� ��ü�� ResponseBody�� ������� @ResponseBody ���
	@ResponseBody
	public String idCheck(UserVO userVO) throws JsonProcessingException {
		//Json ��ü�� ��ȯ���ִ� Ŭ���� ObjectMapper
		ObjectMapper mapper = new ObjectMapper();
		Map<String, Object> jsonMap = new HashMap<String, Object>();
		
		int resultIdCheck = userService.idCheck(userVO.getUserId());
		
		jsonMap.put("resultIdCheck", resultIdCheck);
		
		String json = mapper.writerWithDefaultPrettyPrinter().writeValueAsString(jsonMap);
		
		System.out.println("jsonString=================" + json);
		
		return json;
	}
	
	@RequestMapping("/signup.do")
	public String signup() {
		return "user/signup";
	}
	
	
}
