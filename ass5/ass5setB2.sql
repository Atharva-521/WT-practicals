CREATE TABLE Student (
    Stud_id INT PRIMARY KEY,
    Name VARCHAR(50),
    Class VARCHAR(20)
);

CREATE TABLE Competition (
    C_no INT PRIMARY KEY,
    C_name VARCHAR(50),
    Type VARCHAR(20)
);

CREATE TABLE Student_Competition (
    Stud_id INT,
    C_no INT,
    Rank INT,
    Year INT,
    PRIMARY KEY (Stud_id, C_no),
    FOREIGN KEY (Stud_id) REFERENCES Student(Stud_id),
    FOREIGN KEY (C_no) REFERENCES Competition(C_no)
);
