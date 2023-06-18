
-- Table: User
CREATE TABLE User (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(30) NOT NULL,
    age int NOT NULL,
    foto longblob NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    PRIMARY KEY (id)
);

-- Table: admission
CREATE TABLE admission (
    id int  NOT NULL,
    tanggal_daftar date  NOT NULL,
    User_id int  NOT NULL,
    CONSTRAINT admission_pk PRIMARY KEY (id)
);

-- Table: contact
CREATE TABLE contact (
    id int  NOT NULL,
    judul varchar(128)  NOT NULL,
    pesan longtext  NOT NULL,
    User_id int  NOT NULL,
    CONSTRAINT contact_pk PRIMARY KEY (id)
);

-- Table: courses
CREATE TABLE courses (
    id int  NOT NULL,
    name varchar(30)  NOT NULL,
    deskripsi varchar(255)  NOT NULL,
    harga int  NOT NULL,
    durasi time  NOT NULL,
    admission_id int  NOT NULL,
    CONSTRAINT courses_pk PRIMARY KEY (id)
);

-- Table: partners
CREATE TABLE partners (
    id int  NOT NULL,
    name varchar(50)  NOT NULL,
    description longtext  NOT NULL,
    CONSTRAINT partners_pk PRIMARY KEY (id)
);

-- Table: partners_courses
CREATE TABLE partners_courses (
    partners_id int  NOT NULL,
    courses_id int  NOT NULL,
    CONSTRAINT partners_courses_pk PRIMARY KEY (partners_id,courses_id)
);

-- Table: students
CREATE TABLE students (
    id int  NOT NULL,
    name int  NOT NULL,
    age int  NOT NULL,
    foto char(30)  NOT NULL,
    CONSTRAINT students_pk PRIMARY KEY (id)
);

-- Table: students_courses
CREATE TABLE students_courses (
    students_id int  NOT NULL,
    courses_id int  NOT NULL,
    CONSTRAINT students_courses_pk PRIMARY KEY (students_id,courses_id)
);

-- Table: tutors
CREATE TABLE tutors (
    id int  NOT NULL,
    name varchar(50)  NOT NULL,
    age int  NOT NULL,
    alumni_universitas varchar(50)  NOT NULL,
    foto longblob  NOT NULL,
    CONSTRAINT tutors_pk PRIMARY KEY (id)
);

-- Table: tutors_courses
CREATE TABLE tutors_courses (
    tutors_id int  NOT NULL,
    courses_id int  NOT NULL,
    CONSTRAINT tutors_courses_pk PRIMARY KEY (tutors_id,courses_id)
);

-- foreign keys
-- Reference: admission_User (table: admission)
ALTER TABLE admission ADD CONSTRAINT admission_User FOREIGN KEY admission_User (User_id)
    REFERENCES User (id);

-- Reference: contact_User (table: contact)
ALTER TABLE contact ADD CONSTRAINT contact_User FOREIGN KEY contact_User (User_id)
    REFERENCES User (id);

-- Reference: courses_admission (table: courses)
ALTER TABLE courses ADD CONSTRAINT courses_admission FOREIGN KEY courses_admission (admission_id)
    REFERENCES admission (id);

-- Reference: partners_courses_courses (table: partners_courses)
ALTER TABLE partners_courses ADD CONSTRAINT partners_courses_courses FOREIGN KEY partners_courses_courses (courses_id)
    REFERENCES courses (id);

-- Reference: partners_courses_partners (table: partners_courses)
ALTER TABLE partners_courses ADD CONSTRAINT partners_courses_partners FOREIGN KEY partners_courses_partners (partners_id)
    REFERENCES partners (id);

-- Reference: students_courses_courses (table: students_courses)
ALTER TABLE students_courses ADD CONSTRAINT students_courses_courses FOREIGN KEY students_courses_courses (courses_id)
    REFERENCES courses (id);

-- Reference: students_courses_students (table: students_courses)
ALTER TABLE students_courses ADD CONSTRAINT students_courses_students FOREIGN KEY students_courses_students (students_id)
    REFERENCES students (id);

-- Reference: tutors_courses_courses (table: tutors_courses)
ALTER TABLE tutors_courses ADD CONSTRAINT tutors_courses_courses FOREIGN KEY tutors_courses_courses (courses_id)
    REFERENCES courses (id);

-- Reference: tutors_courses_tutors (table: tutors_courses)
ALTER TABLE tutors_courses ADD CONSTRAINT tutors_courses_tutors FOREIGN KEY tutors_courses_tutors (tutors_id)
    REFERENCES tutors (id);

-- End of file.

