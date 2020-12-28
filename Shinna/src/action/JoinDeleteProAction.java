package action;

import java.io.PrintWriter;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import svc.DeleteService;
import vo.ActionForward;

public class JoinDeleteProAction implements Action {

	@Override
	public ActionForward execute(HttpServletRequest request, HttpServletResponse response) throws Exception {
		ActionForward forward = null;
		HttpSession session = request.getSession();
		String id = (String)session.getAttribute("id");
		String pw = (String)session.getAttribute("pw");
		DeleteService deleteService = new DeleteService();
		
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();

		String isdelete = request.getParameter("pw");
		boolean isDelete = deleteService.isDelete(isdelete,id);
		if(!isDelete) {
			out.println("<script>");
			out.println("alert('비밀번호가 일치하지 않습니다.')");
			out.println("history.go(-1);");
			out.println("</script>");
		} else {
			out.println("<script>");
			out.println("alert('회원탈퇴 되었습니다')");
			out.println("</script>");
				forward = new ActionForward();
				forward.setRedirect(true);
				forward.setPath("Logout.do");
			}
		return forward;
		
		
	}

}
