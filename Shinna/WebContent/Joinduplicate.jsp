<!-- 회원가입 중복확인 -->

<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" import="dao.MemberDAO, db.JdbcUtil, java.sql.*"%>
<%
	MemberDAO memberDAO = MemberDAO.getInstance();
	Connection con = JdbcUtil.getConnection();
	memberDAO.setConnection(con);
	boolean isId = memberDAO.checkId(request.getParameter("id"));
	out.println("["+ isId + "]");
%>