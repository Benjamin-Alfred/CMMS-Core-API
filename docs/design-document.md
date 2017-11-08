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

**User**|
---------|
id primary key<br />first_name<br />middle_name<br />last_name<br />email_address<br />mobile_phone<br />organizational_affiliation<br />password<br />|
login(email_address, password)<br />logout()<br />updateUser(first_name, middle_name, last_name, mobile_phone, organizational_affiliation)|


**Permission**|
---------|
id primary key<br />name<br />description<br />|
<br />|

**Role**|
---------|
id primary key<br />name<br />description<br />|
updateRole(name, description)<br />deleteRole()|

**Manufacturer**|
---------|
id primary key<br />name<br />addres<br />|
updateManufacturer(name, address)<br />deleteManufacturer()|

**EquipmentType**|
---------|
id primary key<br />name<br />description<br />|
updateEquipmentType(name, description)<br />deleteEquipmentType()|

**Equipment**|
---------|
id primary key<br />brand_name<br />description<br />manufactuer_id<br />|
updateEquipment(brand_name, description)<br />deleteEquipment()|

**EquipmentProperty**|
---------|
id primary key<br />equipment_id<br />name<br />type: {"FREETEXT", "OPTIONSLIST", "NUMERIC"}<br />|
updateProperty(name)<br />deleteProperty()|

**EquipmentPropertyOption**|
---------|
id primary key<br />equipment_property_id<br />name<br />|
updatePropertyOption(name)<br />deletePropertyOption()|

**EquipmentPropertyRange**|
---------|
id primary key<br />equipment_property_id<br />lower_limit<br />upper_limit<br />unit<br />|
updatePropertyRange(lower_limit, upper_limit, unit)<br />deletePropertyRange()|

**MasterFacilitiesList**|
---------|
id primary key<br />MFL_code unique<br />name<br />registration_number<br />KEPH_level<br />facility_type<br />owner<br />regulatory_body<br />beds<br />bots<br />county<br />constituency<br />sub_county<br />ward<br />operation_status<br />open_whole_day<br />open_public_holidays<br />open_weekends<br />open_late_night<br />service_names<br />approved<br />public_visible<br />closed<br />|
updateFacility(property, value)<br />deleteFacility()<br />addEquipment(equipment_id, serial_number, commissioning_date, service_frequency(days))<br />deleteEquipment(equipment_id, reason)|

**EquipmentService**|
---------|
id primary key<br />equipment_id<br />user_id<br />date_of_service<br />recommendations<br />|

**EquipmentPropertyValue**|
---------|
id primary key<br />equipment_service_id<br />equipment_property_id<br />value<br />|
updatePropertyValue(name)<br />deletePropertyValue()|

### 3.3 Database Design

## 4 User Interface Design

### 4.1 Mobile Screens

### 4.2 Desktop Screens

## 5 Test Cases

Test | Purpose |Type| Steps | Expected Result | Actual Result | Pass/Fail | Comments
-----|---------|----|-------|-----------------|---------------|-----------|---------
1| | | | | | | 
