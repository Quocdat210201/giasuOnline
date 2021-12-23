DROP DATABASE IF EXISTS giasuonline;

CREATE DATABASE giasuonline;

USE giasuonline;

CREATE TABLE permission (
  permissionID INT NOT NULL,
  permissionName VARCHAR(20) COLLATE utf8_unicode_ci NOT NULL,
  permissionDetail VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (permissionID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO permission (permissionID, permissionName, permissionDetail)
VALUES (1, 'admin', 'Quản trị viên'),
		(2, 'tutor', 'Gia sư'),
		(3, 'parents', 'Phụ huynh');

CREATE TABLE account (
    emailAddress VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    password VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    permissionID INT NOT NULL,
    PRIMARY KEY (emailAddress),
    FOREIGN KEY  (permissionID) REFERENCES permission(permissionID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO account (emailAddress, password, permissionID)
VALUES
('admin@gmail.com', '123456', 1),
('giasu1@gmail.com', '123456', 2),
('giasu2@gmail.com', '123456', 2),
('giasu3@gmail.com', '123456', 2),
('giasu4@gmail.com', '123456', 2),
('giasu5@gmail.com', '123456', 2),
('giasu6@gmail.com', '123456', 2),
('giasu7@gmail.com', '123456', 2),
('giasu8@gmail.com', '123456', 2),
('giasu9@gmail.com', '123456', 2),
('giasu10@gmail.com', '123456', 2),
('giasu11@gmail.com', '123456', 2),
('giasu12@gmail.com', '123456', 2),
('giasu13@gmail.com', '123456', 2),
('giasu14@gmail.com', '123456', 2),
('giasu15@gmail.com', '123456', 2),
('phuhuynh1@gmail.com', '123456', 3),
('phuhuynh2@gmail.com', '123456', 3),
('phuhuynh3@gmail.com', '123456', 3);

CREATE TABLE administrator (
    adminID INT AUTO_INCREMENT,
    avatar VARCHAR(255) DEFAULT NULL,
    emailAddress VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    fullName VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    gender VARCHAR(10) COLLATE utf8_unicode_ci NULL,
    dateOfBirth VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    phone VARCHAR(20) COLLATE utf8_unicode_ci NULL,
    address VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    PRIMARY KEY (adminID),
    FOREIGN KEY  (emailAddress) REFERENCES account(emailAddress)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO administrator (avatar, emailAddress, fullName, gender, dateOfBirth, phone, address)
VALUES
(NULL, 'admin@gmail.com', 'Admin', 'Nam', '29/02/2001', '0987654321', NULL);

CREATE TABLE tutor (
    tutorID INT AUTO_INCREMENT,
    avatar VARCHAR(255) DEFAULT NULL,
    emailAddress VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    fullName VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    gender VARCHAR(10) COLLATE utf8_unicode_ci NULL,
    dateOfBirth VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    phone VARCHAR(20) COLLATE utf8_unicode_ci NULL,
    address VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    education VARCHAR(100) COLLATE utf8_unicode_ci NULL, -- Học vấn
    content VARCHAR(255) COLLATE utf8_unicode_ci NULL, -- Dạy các môn: Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1,...
    teachingSchedule VARCHAR(255) COLLATE utf8_unicode_ci NULL, -- Lịch dạy: thứ 2(tối), thứ 3 (sáng), ...
    generalIntroduction VARCHAR(255) COLLATE utf8_unicode_ci NULL, -- Giới thiệu chung
    rate INT DEFAULT NULL, -- Đánh giá: 1 -> 5
    teachingClassNumber INT DEFAULT NULL, -- Số lớp đã dạy
    PRIMARY KEY (tutorID),
    FOREIGN KEY  (emailAddress) REFERENCES account(emailAddress)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO tutor (avatar, emailAddress, fullName, gender, dateOfBirth, phone, address, education, content, teachingSchedule, generalIntroduction, rate, teachingClassNumber)
VALUES
('giasu1.jpg', 'giasu1@gmail.com', 'Gia su A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A', 'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu2.jpg', 'giasu2@gmail.com', 'Gia su B', 'Nam', '29/02/2001', '0987654321', 'Dia chi B',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu3.jpg', 'giasu3@gmail.com', 'Gia su C', 'Nữ', '29/02/2001', '0987654321', 'Dia chi C',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu4.jpg', 'giasu4@gmail.com', 'Gia su D', 'Nam', '29/02/2001', '0987654321', 'Dia chi D',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu5.jpg', 'giasu5@gmail.com', 'Gia su E', 'Nữ', '29/02/2001', '0987654321', 'Dia chi E',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu6.jpg', 'giasu6@gmail.com', 'Gia su F', 'Nữ', '29/02/2001', '0987654321', 'Dia chi F',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu7.jpg', 'giasu7@gmail.com', 'Gia su G', 'Nữ', '29/02/2001', '0987654321', 'Dia chi G',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu8.jpg', 'giasu8@gmail.com', 'Gia su H', 'Nam', '29/02/2001', '0987654321', 'Dia chi H',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu9.jpg', 'giasu9@gmail.com', 'Gia su I', 'Nữ', '29/02/2001', '0987654321', 'Dia chi I',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu10.jpg', 'giasu10@gmail.com', 'Gia su K', 'Nam', '29/02/2001', '0987654321', 'Dia chi K',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu11.jpg', 'giasu11@gmail.com', 'Gia su L', 'Nữ', '29/02/2001', '0987654321', 'Dia chi L',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu12.jpg', 'giasu12@gmail.com', 'Gia su M', 'Nam', '29/02/2001', '0987654321', 'Dia chi M',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu13.jpg', 'giasu13@gmail.com', 'Gia su N', 'Nữ', '29/02/2001', '0987654321', 'Dia chi N',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu14.jpg', 'giasu14@gmail.com', 'Gia su O', 'Nam', '29/02/2001', '0987654321', 'Dia chi O',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('giasu15.jpg', 'giasu15@gmail.com', 'Gia su P', 'Nữ', '29/02/2001', '0987654321', 'Dia chi P',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3);

CREATE TABLE parents (
    parentsID INT AUTO_INCREMENT,
    avatar VARCHAR(255) DEFAULT NULL,
    emailAddress VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    fullName VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
    gender VARCHAR(10) COLLATE utf8_unicode_ci NULL,
    dateOfBirth VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    phone VARCHAR(20) COLLATE utf8_unicode_ci NULL,
    address VARCHAR(255) COLLATE utf8_unicode_ci NULL,
    PRIMARY KEY (parentsID),
    FOREIGN KEY  (emailAddress) REFERENCES account(emailAddress)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO parents (avatar, emailAddress, fullName, gender, dateOfBirth, phone, address)
VALUES
(NULL, 'phuhuynh1@gmail.com', 'Phu Huynh A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A'),
(NULL, 'phuhuynh2@gmail.com', 'Phu Huynh A', 'Nữ', '29/02/2001', '0987654321', 'Dia chi B'),
(NULL, 'phuhuynh3@gmail.com', 'Phu Huynh A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A');

CREATE TABLE `lophoc` (
  `Id_lop` int(11) NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `monhoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hocphi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tutor` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ghichu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGian` int(11) NOT NULL,
  `PhiNhanLop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id_lop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO `lophoc` (`TieuDe`, `monhoc`, `hinhthuc`, `hocphi`, `diachi`, `tutor`, `SoLuong`, `ghichu`, `ThoiGian`, `PhiNhanLop`) VALUES
('Cần tìm gia sư dạy toán', 'Toán', 'online', '500.000', '17 Bạch Đằng', 'Nữ', 2, 'yêu cầu giáo viên nữ ,giỏi tiếng anh', 5, '1.500.000'),
('Cần tìm gia sư dạy văn lớp 6', 'Văn lớp 6', 'online', '500.000', '17 Bạch long vĩ', 'Nam', 1, 'có kinh nghieem 2 năm dạy học', 10, '1.500.000'),
('Cần tìm gia sư tiếng anh', 'Anh lớp 2', 'offline', '300.000', 'long biên, hà nội', 'Nữ', 10, 'có bằng B1', 20, '1.500.000'),
('cần tìm gia sư phụ đạo toán lớp 10', 'Đại số lớp 10', 'online', '500.000', '17 Bạch trạch', 'Nam', 3, 'giỏi toán, sinh viên', 10, '500.000'),
('cần tìm gia sư dạy toán', 'Toán', 'online', '750.000', '20 thanh sơn', 'Nam', 5, 'có kỹ năng giảng dạy cho trẻ em', 5, '200.000'),
('Cần tìm gia sư dạy toán', 'Toán lớp 4', 'offline', '399.999', 'cầu giấy, hà nam', 'Nữ', 1, 'sinh viên hoặc cô giáo trẻ', 20, '2.000.000'),
('Cần tìm giá sư dạy vẽ', 'mỹ thuật', 'offine', '500.000', '20 thanh Long', 'Nam', 1, 'Có kỹ năng dạy vẽ, đại học mỹ thuật', 10, '500.000'),
('Cần tìm gia sư dạy Hóa', 'Hóa lớp 11', 'offline', '500.000', 'cầu giấy, Đà Nẵng', 'Nam', 2, 'Giỏi hóa, có kỹ nẵng giảng dạy', 25, '1.000.000'),
('Cần tìm gia sư dạy lý', 'Lý 12', 'online', '500.000', '20 thanh Long', 'Nam', 2, 'có kinh nghiệm ôn thi đại học càng tốt', 10, '500.000'),
('Cần Tìm gia sư dạy sinh', 'Sinh 11', 'offline', '500.000', 'cầu giấy, hà nam', 'Nam', 2, 'nghiêm  khắc và quản lí đc học sinh', 25, '1.000.000');

CREATE TABLE `tutor_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `tutorid` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

INSERT INTO `tutor_rating` (`userid`, `tutorid`, `rating`, `timestamp`) VALUES
(1, 1, 4, '2021-12-21 05:41:54'),
(1, 2, 5, '2021-12-21 05:41:54'),
(1, 3, 4, '2021-12-21 05:41:54'),
(1, 2, 4.5, '2021-12-21 05:41:54'),
(1, 3, 4.5, '2021-12-21 05:41:54'),
(1, 4, 4.5, '2021-12-21 05:41:54'),
(1, 5, 4.5, '2021-12-21 05:41:54'),
(1, 6, 4.5, '2021-12-21 05:41:54'),
(1, 7, 4.5, '2021-12-21 05:41:54'),
(1, 8, 4.5, '2021-12-21 05:41:54'),
(1, 9, 4.5, '2021-12-21 05:41:54'),
(1, 10, 4.5, '2021-12-21 05:41:54'),
(1, 11, 4.5, '2021-12-21 05:41:54'),
(1, 12, 4.5, '2021-12-21 05:41:54'),
(1, 13, 4.5, '2021-12-21 05:41:54'),
(1, 14, 4.5, '2021-12-21 05:41:54'),
(1, 15, 4.5, '2021-12-21 05:41:54')
