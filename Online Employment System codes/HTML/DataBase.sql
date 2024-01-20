CREATE DATABASE OES;
CREATE USER 'Admin'@'localhost' IDENTIFIED BY 'Admin123';
GRANT ALL PRIVILEGES ON OES.* TO 'Admin'@'localhost';

USE OES;

CREATE TABLE Job (
    Job_Id INT PRIMARY KEY,
    Job_Avail VARCHAR(255) NOT NULL,
    Location VARCHAR(255) NOT NULL,
    Job_Title VARCHAR(255) NOT NULL,
    Job_Type VARCHAR(255) NOT NULL
);



CREATE TABLE Job_Seeker (
    Seeker_Id INT PRIMARY KEY,
    Job_Id INT,
    Seeker_Name VARCHAR(255) NOT NULL,
    Seeker_Email VARCHAR(255) UNIQUE,
    Seeker_Age INT CHECK (Seeker_Age >= 18),
    CV VARCHAR(255) NOT NULL,
    Civil_Number INT NOT NULL,
    Seeker_Password VARCHAR(255) NOT NULL,
    Phone_Number INT NOT NULL,
    FOREIGN KEY (Job_Id) REFERENCES Job(Job_Id)
);



CREATE TABLE Company (
    Comp_Id INT PRIMARY KEY,
    Seeker_Id INT,
    Comp_Name VARCHAR(255) NOT NULL,
    Comp_PhoneNo INT NOT NULL,
    Select_Job_Id INT,
    FOREIGN KEY (Seeker_Id) REFERENCES Job_Seeker(Seeker_Id),
    FOREIGN KEY (Select_Job_Id) REFERENCES Job(Job_Id)
);


CREATE TABLE Select_Job (
    Select_Id INT PRIMARY KEY,
    Select_Number INT NOT NULL,
    Select_Name VARCHAR(255) NOT NULL,
    Select_Company VARCHAR(255) NOT NULL,
    Select_Type VARCHAR(255) NOT NULL,
    Job_Id INT,
    Select_Job VARCHAR(255) NOT NULL,
    FOREIGN KEY (Job_Id) REFERENCES Job(Job_Id)
);



CREATE TABLE Admin (
    Admin_Id INT PRIMARY KEY,
    Admin_Name VARCHAR(255) NOT NULL,
    Admin_PhoneNo INT NOT NULL,
    Admin_Password VARCHAR(255) NOT NULL
);


CREATE TABLE Feedback (
    Feed_id INT PRIMARY KEY,
    Job_Id INT,
    Feed_text VARCHAR(255) NOT NULL,
    FOREIGN KEY (Job_Id) REFERENCES Job(Job_Id)
);


INSERT INTO Admin(Admin_Id, Admin_Name, Admin_PhoneNo, Admin_Password) 
            VALUES(1,"Admin",12345678,"123");
