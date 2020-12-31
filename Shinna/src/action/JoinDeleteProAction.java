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
		
		String id = request.getParameter("id");
		String pw = request.getParameter("pw");
		DeleteService deleteService = new DeleteService();
		boolean isDelete = deleteService.isDelete(id, request.getParameter("pw"));
		
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();

		if(!id.equals(request.getParameter("id"))) {
				out.println("<script>");
				out.println("alert('아이디가 일치하지 않습니다.')");
				out.println("history.go();");
				out.println("</script>");
				out.close();
				System.out.println("아이디일치x");
				
				if(!pw.equals(request.getParameter("pw")))  {
				out.println("<script>");
				out.println("alert('비밀번호가 일치하지 않습니다.')");
				out.println("history.go();");
				out.println("</script>");
				out.close();
				System.out.println("일치x");
			
				} else {
				forward = new ActionForward();
				forward.setRedirect(true);
				forward.setPath("Logout.do");
				out.println("<script>");
				out.println("alert('회원탈퇴 되었습니다')");
				out.println("</script>");
				out.close();
				System.out.println("일치");
				}
			return forward;
			}
		return forward;	
			
		}

	}

