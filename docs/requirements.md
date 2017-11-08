# Requirements

**Version:** 0.1

## User Management

 . |Description
---|------------
1|All users will be required to login in order to access system features. To login they will need to specify a valid *email address* and a *password*.
2|The system should allow for adding new users. New user details will include: <br />a. Names (first, middle and last)<br />b. Email Address (must be unique)<br />c. Mobile phone contact<br />d. Organizational Affiliation
3|The system should allow users to edit their profile details. These include the data items mentioned in #2 above as well as their password.
4|The system should allow for deleting users.
5|The system should allow users to reset their password.
6|The system will allow for creating new roles. The data elements captured will be:<br />a. Role name<br />b. Role description
7|The system will allow for editing roles.
8|The system should allow for deleting of roles.
9|The system will allow for assigning of permissions to roles. The list of permissions may be inbuilt into the system. Each permission is pegged to a specific system feature.
10|The system will allow for assigning of roles to users. The role assigned to a user will determine what features of the system the user has access to (ie *role-based* access to system features).
11|Some users may be restricted to accessing data from specified geographic locations eg from county or from a number of counties.

## Core Functions

 . |Description
---|------------
12|The system should allow for adding manufacturers. Manufacturer details include:<br />a. Name<br />b. Address
13|The system will allow for editing manufacturers.
14|The system will allow for deleting manufacturers.
15|The system should allow for adding equipment. Equipment details include:<br />a. Name<br />b. Description<br />c. Manufacturer<br />The system should also allow for recording of equipment specific details such as *model*, *class*, *allowable_intake*, *allowable_outflow* for biosafety cabinets.
16|The system will allow for editing equipment details.
17|The system will allow for deleting equipment.
18|The system will contain all facilities as contained in the country-wide master facility list (MFL).
19|The system will allow for adding new facilities to the facilities list.
20|The system will allow for updating facilities.
21|The system will allow for deleting facilities.
22|The system will allow for adding an equipment to a facility. The details captured include:<br />a. the equipment<br />b. the equipment serial number<br />c. the commissioning date d. the servicing frequency (in days)
23|The system will allow for removing an equipment from a facility. The reason for the deletion should be provided.
24|The system will allow for recording of the equipment serviced. The details captured include:<br />a. the engineer servicing the equipment<br />b. date of service<br />c. equipment serviced<br />The system should also be able to record equipment specific metrics. For biosafety cabinets, the system will record:<br />- the final set points intake<br />- final set points downflow<br />- HEPA filter test supply<br />- HEPA filter test exhaust<br />- smoke test<br />- whether the equipment has ever been serviced<br />- any recommendations

## Reports

The system should be able to generate the following reports.

 . |Description
---|------------
25|The equipment due for service
26|The equipment that failed calibration with failure reasons
27|The equipment past the service date
28|The list of all equipment filtered by properties (type, location, partner)


## Other Requirements
 . |Description
---|------------
29|The applications should be accessible from computers (desktops/laptops), tablets and mobile phones.
30|The system should keep an audit trail of all critical system actions. These include:<br />a. Logins and logouts<br />b. Additions, edits/updates and deletes<br />This should allow for attribution of any system changes to specific users.
