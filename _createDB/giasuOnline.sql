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
    adminID VARCHAR(20) NOT NULL,
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

INSERT INTO administrator (adminID, avatar, emailAddress, fullName, gender, dateOfBirth, phone, address)
VALUES
('AD001', NULL, 'admin@gmail.com', 'Admin', 'Nam', '29/02/2001', '0987654321', NULL);

CREATE TABLE tutor (
    tutorID VARCHAR(20) NOT NULL,
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

INSERT INTO tutor (tutorID, avatar, emailAddress, fullName, gender, dateOfBirth, phone, address, education, content, teachingSchedule, generalIntroduction, rate, teachingClassNumber)
VALUES
('TT001', NULL, 'giasu1@gmail.com', 'Gia su A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A', 'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT002', NULL, 'giasu2@gmail.com', 'Gia su B', 'Nam', '29/02/2001', '0987654321', 'Dia chi B',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT003', NULL, 'giasu3@gmail.com', 'Gia su C', 'Nữ', '29/02/2001', '0987654321', 'Dia chi C',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT004', NULL, 'giasu4@gmail.com', 'Gia su D', 'Nam', '29/02/2001', '0987654321', 'Dia chi D',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT005', NULL, 'giasu5@gmail.com', 'Gia su E', 'Nữ', '29/02/2001', '0987654321', 'Dia chi E',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT006', NULL, 'giasu6@gmail.com', 'Gia su F', 'Nữ', '29/02/2001', '0987654321', 'Dia chi F',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT007', NULL, 'giasu7@gmail.com', 'Gia su G', 'Nữ', '29/02/2001', '0987654321', 'Dia chi G',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT008', NULL, 'giasu8@gmail.com', 'Gia su H', 'Nam', '29/02/2001', '0987654321', 'Dia chi H',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT009', NULL, 'giasu9@gmail.com', 'Gia su I', 'Nữ', '29/02/2001', '0987654321', 'Dia chi I',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT010', NULL, 'giasu10@gmail.com', 'Gia su K', 'Nam', '29/02/2001', '0987654321', 'Dia chi K',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT011', NULL, 'giasu11@gmail.com', 'Gia su L', 'Nữ', '29/02/2001', '0987654321', 'Dia chi L',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT012', NULL, 'giasu12@gmail.com', 'Gia su M', 'Nam', '29/02/2001', '0987654321', 'Dia chi M',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT013', NULL, 'giasu13@gmail.com', 'Gia su N', 'Nữ', '29/02/2001', '0987654321', 'Dia chi N',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT014', NULL, 'giasu14@gmail.com', 'Gia su O', 'Nam', '29/02/2001', '0987654321', 'Dia chi O',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3),
('TT015', NULL, 'giasu15@gmail.com', 'Gia su P', 'Nữ', '29/02/2001', '0987654321', 'Dia chi P',  'Đại học', 'Toán - Cấp 1, Tiếng việt - Cấp 1, Tiếng anh - Cấp 1', 'Thứ 2 (tối), Thứ 3 (sáng tối), Thứ 4 (tối), Thứ 5 (sáng tối), Thứ 6 (tối), Thứ 7 (sáng tối)', 'Sinh viên năm 4. Trường Đại học Sư Phạm Đà Nẵng.', 5, 3);

CREATE TABLE parents (
    parentsID VARCHAR(20) NOT NULL,
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

INSERT INTO parents (parentsID, avatar, emailAddress, fullName, gender, dateOfBirth, phone, address)
VALUES
('PR001', NULL, 'phuhuynh1@gmail.com', 'Phu Huynh A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A'),
('PR002', NULL, 'phuhuynh2@gmail.com', 'Phu Huynh A', 'Nữ', '29/02/2001', '0987654321', 'Dia chi B'),
('PR003', NULL, 'phuhuynh3@gmail.com', 'Phu Huynh A', 'Nam', '29/02/2001', '0987654321', 'Dia chi A');
