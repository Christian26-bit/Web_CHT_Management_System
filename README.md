# CHT Travel and Tours Management System

## Documentation (Complete)

---

## 1. Title Page with Names Group Members

**CHT Travel and Tours Management System**

**Group Members:**
- [Add group member names here]

---

## 2. Table of Contents

1. Title Page with Names Group Members
2. Table of Contents
3. Project Background
4. Data Model (Entity-Relationship Diagram)
5. Relational Model (Relational Schema and Sample Tables)
6. Source Codes (Organized according to Entities/Modules)
7. SQL Scripts (DDL, DML)
8. PHP Source Code and User Interfaces

---

## 3. Project Background

The CHT Travel and Tours Management System is a web-based application designed to streamline the operations of a travel agency. It manages clients, employees, bookings, tour packages, payments, and more. The system provides both administrative and user interfaces, allowing for efficient management and booking of travel packages.

---

## 4. Data Model (Entity-Relationship Diagram)

**Entities:**
- Employee
- Client
- Booking
- Package
- Payment
- Accommodation
- Activity
- Trip

**Relationships:**
- An Employee manages Bookings.
- A Client can have multiple Bookings.
- A Booking is for a specific Package.
- A Package includes multiple Activities and Accommodations.
- Payments are linked to Bookings.

*_(Insert ERD diagram here. Use dbdiagram.io, draw.io, or MySQL Workbench to generate the ERD based on your schema.)_*

---

## 5. Relational Model (Relational Schema and Sample Tables)

**Relational Schema:**
- **employee** (employeeId, name, email, password, contactNumber, isManager, isActive)
- **client** (clientId, name, email, address, contactNumber, customerType, dateRegistered)
- **booking** (BookingID, EmployeeID, ClientID, PackageID, BookingDate, Status, PaxCount)
- **package** (PackageID, Name, Description, Destination, Duration, MaxPax, Inclusions, Price, IsActive, CreatedByEmployeeId, ImagePath)
- **payment** (paymentId, bookingId, amount, status, paymentDate)
- **accommodation** (accommodationId, name, location, contactNumber, amenities, pricePerNight, roomType)
- **activity** (activityId, name, description, location, duration, isActive)
- **trip** (TripID, StartDate, EndDate, ...)

**Sample Table:**
| employeeId | name           | email              | isManager | isActive |
|------------|----------------|--------------------|-----------|----------|
| 1          | John Doe       | john@example.com   | 1         | 1        |
| 2          | Jane Smith     | jane@example.com   | 0         | 1        |

*(Add sample rows for each table as shown in your `mysql_structure.txt`)*

---

## 6. Source Codes (Organized according to Entities/Modules)

**Admin Module:**
- `api/admin/dashboard_summary.php`
- `api/admin/employees_list.php`
- `api/admin/save_employee.php`
- `api/admin/list_packages.php`
- `api/admin/save_package.php`
- `views/admin/dashboard.php`
- `views/admin/employees.php`
- `views/admin/tour_packages.php`
- `assets/js/admin/adminDashboard.js`
- `assets/js/admin/adminEmployees.js`
- `assets/js/admin/adminTourPackages.js`

**User Module:**
- `api/user/bookings_list.php`
- `api/user/clients_list.php`
- `api/user/packages_list.php`
- `views/user/userDashboard.php`
- `views/user/userBookings.php`
- `assets/js/user/userBookings.js`
- `assets/js/user/userClients.js`

**Authentication:**
- `api/login.php`
- `api/reset_password.php`
- `views/login.php`
- `assets/js/admin/log_in.js`

**Booking Management:**
- `api/user/bookings_save.php`
- `api/user/bookings_update.php`
- `api/user/bookings_delete.php`
- `views/bookings/bookings1.php` ... `bookings6.php`
- `assets/js/bookings/bookings1.js` ... `bookings6.js`

**Configuration:**
- `config/database.php`
- `config/routes.php`

*(List other relevant files as needed.)*

---

## 7. SQL Scripts (DDL, DML)

**DDL (Table Creation):**
```sql
CREATE TABLE employee (
  employeeId INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  contactNumber VARCHAR(20),
  isManager TINYINT(1),
  isActive TINYINT(1)
);
-- (Add other CREATE TABLE statements from mysql_structure.txt)
```

**DML (Sample Data):**
```sql
INSERT INTO employee VALUES (1, 'John Doe', 'john@example.com', 'hashedpassword', '09180000001', 1, 1);
INSERT INTO client VALUES (1, 'Carlos Ramirez', 'carlos@example.com', 'Manila, PH', '09180000001', 'REGULAR', '2025-01-05');
-- (Add other INSERT statements from mysql_structure.txt)
```

---

## 8. PHP Source Code and User Interfaces

**Routing and Entry Point:**
- `index.php` (handles routing and error handling)

**API Endpoints:**
- `api/adminDashboard.php` (dashboard data for admin)
- `api/user/bookings_list.php` (fetches bookings for users)
- `api/config.php` (database connection)

**Views:**
- `views/admin/dashboard.php` (admin dashboard UI)
- `views/user/userDashboard.php` (user dashboard UI)
- `views/404.php` (error page)

**Assets:**
- `assets/css/style.css` (main styles)
- `assets/js/admin/app.js` (admin app logic)
- `assets/js/user/user_app.js` (user app logic)

*(For each file, you can include a brief description and a code snippet or the full code in the appendix.)*

---

## Appendix

- **Full Source Code:** (Attach as a ZIP or include in the appendix if required)
- **Screenshots of User Interfaces:** (Add screenshots of the main pages: login, dashboard, booking, etc.)
- **References:** (List any libraries, frameworks, or resources used.)

---

**Instructions to Export as PDF:**
1. Copy this structure into a Word, Google Docs, or LaTeX document.
2. Fill in the group member names, sample data, and code snippets as needed.
3. Insert diagrams and screenshots where appropriate.
4. Export or print the document as a PDF.
