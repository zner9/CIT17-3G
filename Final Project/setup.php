<?php
include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS Users (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Student (
    studentID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Course (
    courseID INT AUTO_INCREMENT PRIMARY KEY,
    courseName VARCHAR(255) NOT NULL,
    description TEXT
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Instructor (
    instructorID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
)";

$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Enrollment (
    enrollmentID INT AUTO_INCREMENT PRIMARY KEY,
    studentID INT,
    courseID INT,
    FOREIGN KEY (studentID) REFERENCES Student(studentID),
    FOREIGN KEY (courseID) REFERENCES Course(courseID)
)";

$conn->query($sql);

echo "Database and tables created successfully!";
$conn->close();
?>
