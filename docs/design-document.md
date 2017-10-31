# Design Document

**version**: 0.1

## 1 Design Considerations

This project will create a data repository for equipment. The goal is to facilitate storage of equipment information, tracking of movements, servicing records, ... The initial focus is on Bio-safety cabinets.

### 1.1 Assumptions


### 1.2 Constraints


### 1.3 System Environment


## 2. Architectural Design

### 2.1 Context Diagram

### 2.2 Component Diagram

### 2.3 Deployment Diagram

## 3. Low Level Design

### 3.1 Use Cases

#### 3.1.1 Diagram

#### 3.1.2 Use Case Descriptions

### 3.2 Class Diagram

**Users**|
---------|
first_name<br />middle_name<br />last_name<br />email_address<br />mobile_phone<br />organizational_affiliation<br />password<br />|
login(email_address, password)<br />logout()<br />createUser(first_name, middle_name, last_name, email_address, mobile_phone, organizational_affiliation)<br />updateUser(first_name, middle_name, last_name, mobile_phone, organizational_affiliation)|


**Permissions**|
---------|
name<br />description<br />|
<br />|

**Roles**|
---------|
name<br />description<br />|
addRole(name, description)<br />updateRole(name, description)<br />deleteRole()|

### 3.3 Database Design

## 4 User Interface Design

### 4.1 Mobile Screens

### 4.2 Desktop Screens

## 5 Test Cases

Test | Purpose |Type| Steps | Expected Result | Actual Result | Pass/Fail | Comments
-----|---------|----|-------|-----------------|---------------|-----------|---------
1| | | | | | | 
