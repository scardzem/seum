package com.spring.boardweb.service.board.impl;

import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.spring.boardweb.BoardVO;
import com.spring.boardweb.service.board.BoardService;

@Service
public class BoardServiceImpl implements BoardService {
	@Autowired
	BoardDAO boardDAO;
	
	@Override
	public void insertBoard(BoardVO boardVO) {
		boardDAO.insertBoard(boardVO);
	}
	
	@Override
	public List<BoardVO> getBoardList(Map<String, String> paramMap) {
		return boardDAO.getBoardList(paramMap);
	}
	
	@Override
	public BoardVO getBoard(int boardSeq) {
		return boardDAO.getBoard(boardSeq);
	}
	
	@Override
	public void updateBoardCnt(int boardSeq) {
		boardDAO.updateBoardCnt(boardSeq);
	}
	
	@Override
	public void updateBoard(BoardVO boardVO) {
		boardDAO.updateBoard(boardVO);
	}
	
	@Override
	public void deleteBoard(int boardSeq) {
		boardDAO.deleteBoard(boardSeq);
	}
	
	/*
	 * @Override public List<BoardVO> getBoardListSearch(Map<String, String>
	 * paramMap) { return boardDAO.getBoardListSearch(paramMap); }
	 */
}
