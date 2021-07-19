-- 회원관리
CREATE TABLE `c_member` (
	`idx`			int	NOT NULL	AUTO_INCREMENT		`고유번호`,
	`user_id`		varchar(50)	NOT NULL				`아이디`,
	`user_name`		varchar(50)	NOT NULL				`이름`,
	`password`		varchar(255)	NOT NULL			`비밀번호`,

	`created_at`	datetime	NOT NULL				`가입날짜`,
	`is_deleted`	ENUM('Y','N') NOT NULL				`삭제여부`,

	`is_admin` enum('N','Y') NOT NULL DEFAULT 'N' COMMENT '관리자여부',
	PRIMARY KEY (`idx`),
	UNIQUE KEY `user_id` (`user_id`)
)
COMMENT='회원관리';


-- 재고
CREATE TABLE `c_product`(
	`idx`				int	NOT NULL	AUTO_INCREMENT		`고유번호`,
	`product_code`		int	NOT NULL						`상품코드`,
	`product_name`		varchar(255)	NOT NULL			`상품이름`,	
	`sale_price`		int	NOT NULL						`출고가격`,	
	`quantity`			int	NOT NULL						`재고수량`,	
	`memo`				text NOT NULL						`기타사항`,	
PRIMARY KEY (`idx`),
)

COMMENT='재고관리';


-- 입고
CREATE TABLE `c_product_in`(
	`idx`			int	NOT NULL	AUTO_INCREMENT		`고유번호`,
	`product_code`	int	NOT NULL						`상품코드`,
	`price`			int	NOT NULL						`입고가격`,		
	`in_quantity`	int	NOT NULL						`입고수량`,

	`created_at`	datetime	NOT NULL				`입고날짜`,		
	`updated_at`	datetime	NULL					`수정날짜`,		

PRIMARY KEY (`idx`),
UNIQUE KEY `product_code` (`product_code`)
)
COMMENT='입고관리';


-- 출고
CREATE TABLE `c_product_out`(
	`idx`			int	NOT NULL	AUTO_INCREMENT		`고유번호`,
	`product_code`	int	NOT NULL						`상품코드`,
	`sale_price`	int	NOT NULL						`출고가격`,	
	`out_quantity`	int	NOT NULL						`출고수량`,	

	`created_at`	datetime	NOT NULL				`출고날짜`,		
	`updated_at`	datetime	NULL					`수정날짜`,		

	PRIMARY KEY (`idx`)
)
COMMENT='출고관리';

-- 게시판
CREATE TABLE `c_board` (

    `id`            INT NOT NULL AUTO_INCREMENT COMMENT '고유번호',

    `user_id`       VARCHAR(20) NOT NULL    COMMENT 'id',
	`title`         VARCHAR(255) NOT NULL   COMMENT '제목',
	`content`       TEXT NOT NULL           COMMENT '내용',
	
    `password`      VARCHAR(50) NOT NULL    COMMENT '비밀번호',
    `hit`           INT NOT NULL            COMMENT '조회수',

    `is_secret`     ENUM('Y','N') NULL      COMMENT '비밀글',
    `is_notice`     ENUM('Y','N') NULL      COMMENT '공지사항',
    `is_deleted`    ENUM('Y','N') NULL      COMMENT '삭제여부',

	`created_at`    DATETIME NOT NULL       COMMENT '등록일시',
	`updated_at`    DATETIME NULL           COMMENT '수정일시',

	PRIMARY KEY (`id`) USING BTREE
)
COMMENT='게시판';