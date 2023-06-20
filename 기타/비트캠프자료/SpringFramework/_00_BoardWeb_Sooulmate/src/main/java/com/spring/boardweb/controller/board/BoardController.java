package com.spring.boardweb.controller.board;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/board")
public class BoardController {
	@RequestMapping("/getBoardList.do")
	public String getBoardList() {
		return "board/getBoardList";
	}
	
	@RequestMapping("/getBoard.do")
	public String getBoard() {
		return "board/getBoard";
	}
	
	@RequestMapping("/insertBoard.do")
	public String insertBoard() {
		return "board/insertBoard";
	}
	
	@RequestMapping("/mainpage.do")
	public String mainpage() {
		return "board/mainpage";
	}
	
	@RequestMapping("/intropage.do")
	public String intropage() {
		return "board/intropage";
	}

	
}
